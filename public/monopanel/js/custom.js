document.addEventListener('DOMContentLoaded', function () {
    const seoToggle = document.getElementById('seoToggle');
    const seoFields = document.getElementById('seoFields');
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');
    const metaTitleInput = document.getElementById('meta_title');
    const metaTitlePreview = document.getElementById('meta_title_preview');
    const metaDescriptionInput = document.getElementById('meta_description');
    const metaDescriptionPreview = document.getElementById('meta_description_preview');
    const seoKeywordsInput = document.getElementById('seo_keywords');
    const defaultSeoDescription = document.querySelector('.default-seo-description');
    const existedSeoMeta = document.querySelector('.existed-seo-meta');
    const metaTitleCount = document.getElementById('metaTitleCount');
    const metaDescriptionCount = document.getElementById('metaDescriptionCount');

    let slugAlreadyGenerated = false;

    // SEO Toggle aç/kapa
    if (seoToggle && seoFields) {
        seoToggle.addEventListener('change', function () {
            seoFields.classList.toggle('d-none');

            if (!seoFields.classList.contains('d-none')) {
                updateMetaTitleCount();
                updateMetaDescriptionCount();
            }
        });
    }

    // Title blur olunca slug üret ve meta_title_preview'e title yaz
    if (titleInput) {
        titleInput.addEventListener('blur', function () {
            const titleValue = titleInput.value.trim();

            if (titleValue !== '') {
                // Sadece ilk seferde slug oluştur
                if (!slugAlreadyGenerated && slugInput.value.trim() === '') {
                    const slug = generateSlug(titleValue);
                    slugInput.value = slug;
                    updateMetaLinkPreview(slug);
                    slugAlreadyGenerated = true;
                }

                // SEO görünüm aç
                if (defaultSeoDescription && existedSeoMeta) {
                    defaultSeoDescription.classList.add('d-none');
                    existedSeoMeta.classList.remove('hidden');
                }

                // Sadece title yazıldığında (meta title henüz boşsa) preview'a yaz
                if (metaTitleInput.value.trim() === '' && metaTitlePreview) {
                    metaTitlePreview.innerText = titleValue;
                }
            }
        });
    }

    // Meta title yazıldığında preview ve karakter sayacı değişsin
    if (metaTitleInput) {
        metaTitleInput.addEventListener('input', function () {
            if (metaTitlePreview) {
                metaTitlePreview.innerText = metaTitleInput.value;
            }
            updateMetaTitleCount();
        });
    }

    // Slug input elle değişirse düzelt ve link preview güncelle
    if (slugInput) {
        slugInput.addEventListener('input', function () {
            const cleanSlug = generateSlug(slugInput.value);
            slugInput.value = cleanSlug;
            updateMetaLinkPreview(cleanSlug);
        });
    }

    // Meta description yazılınca preview ve karakter sayacı değişsin
    if (metaDescriptionInput) {
        metaDescriptionInput.addEventListener('input', function () {
            metaDescriptionPreview.innerText = metaDescriptionInput.value;
            updateMetaDescriptionCount();
        });
    }

    // SEO Anahtar Kelimeler alanı (etiket + maksimum 3)
    if (seoKeywordsInput) {
        new Choices(seoKeywordsInput, {
            removeItemButton: true,
            maxItemCount: 3,
            duplicateItemsAllowed: false,
            delimiter: ',',
            placeholderValue: 'Anahtar kelime ekleyin',
            paste: true,
        });
    }

    // Slug Üretme Fonksiyonu
    function generateSlug(text) {
        return text.toLowerCase()
            .normalize('NFD').replace(/[\u0300-\u036f]/g, '')
            .replace(/[çÇğĞıİöÖşŞüÜ]/g, c => ({'ç':'c','Ç':'c','ğ':'g','Ğ':'g','ı':'i','İ':'i','ö':'o','Ö':'o','ş':'s','Ş':'s','ü':'u','Ü':'u'}[c]))
            .replace(/[^a-z0-9\s-]/g, '')
            .trim()
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');
    }

    // Meta Link Preview Güncelle
    function updateMetaLinkPreview(slug) {
        const metaLinkPreview = document.getElementById('meta_link_preview');
        if (metaLinkPreview) {
            metaLinkPreview.innerText = slug;
        }
    }

    // Meta Title Karakter Sayacı
    function updateMetaTitleCount() {
        if (metaTitleInput && metaTitleCount) {
            const remaining = 70 - metaTitleInput.value.length;
            metaTitleCount.textContent = remaining + ' karakter kaldı';
            metaTitleCount.style.color = remaining < 0 ? 'red' : '';
        }
    }

    // Meta Description Karakter Sayacı
    function updateMetaDescriptionCount() {
        if (metaDescriptionInput && metaDescriptionCount) {
            const remaining = 160 - metaDescriptionInput.value.length;
            metaDescriptionCount.textContent = remaining + ' karakter kaldı';
            metaDescriptionCount.style.color = remaining < 0 ? 'red' : '';
        }
    }

    // Sayfa ilk yüklenince mevcut verileri say
    updateMetaTitleCount();
    updateMetaDescriptionCount();


    const form = document.getElementById('mainForm');
    if (!form) return;

    const inputs = form.querySelectorAll('input, textarea, select');

    // Anlık kontrol
    inputs.forEach(function (input) {
        input.addEventListener('input', function () {
            validateInput(input);
        });
        input.addEventListener('blur', function () {
            validateInput(input);
        });
    });

    // Form submit anında kontrol
    form.addEventListener('submit', function (e) {
        let hasError = false;
        clearErrors();

        inputs.forEach(function (input) {
            if (!validateInput(input)) {
                hasError = true;
            }
        });

        if (hasError) {
            e.preventDefault();
            showToast('Eksik veya hatalı alanlar var!', 'error'); // 🌟 EKSİK ALAN VARSA HEMEN TOASTIFY
        }
    });

    function validateInput(input) {
        const fieldName = input.getAttribute('name');
        if (!fieldName) return true;

        let value = input.value.trim();
        let isValid = true;
        let errorMessage = '';

        // Eğer title ise kontrol et
        if (fieldName === 'title' && value === '') {
            isValid = false;
            errorMessage = 'Lütfen Başlık Giriniz';
        }

        // Eğer slug ise kontrol et
        if (fieldName === 'slug' && value === '') {
            isValid = false;
            errorMessage = 'Lütfen URL Giriniz';
        }

        if (!isValid) {
            setError(input, errorMessage);
        } else {
            clearError(input);
        }

        return isValid;
    }

    function setError(input, message) {
        input.classList.add('is-invalid');

        let feedback = input.parentElement.querySelector('.invalid-feedback');
        if (!feedback) {
            feedback = document.createElement('div');
            feedback.className = 'invalid-feedback';
            input.parentElement.appendChild(feedback);
        }
        feedback.textContent = message;
    }

    function clearError(input) {
        input.classList.remove('is-invalid');

        let feedback = input.parentElement.querySelector('.invalid-feedback');
        if (feedback) {
            feedback.textContent = '';
        }
    }

    function clearErrors() {
        inputs.forEach(function (input) {
            clearError(input);
        });
    }
    });
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.btn-delete');

    deleteButtons.forEach(function (button) {
        button.addEventListener('click', function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Emin misiniz?',
                text: "Bu işlemi geri alamazsınız!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Evet, sil!',
                cancelButtonText: 'Vazgeç'
            }).then((result) => {
                if (result.isConfirmed) {
                    button.closest('form').submit();
                }
            });
        });
    });
});
