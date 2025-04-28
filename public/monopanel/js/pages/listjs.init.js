
var customerList,
    checkAll = document.getElementById("checkAll"),
    perPage =
        (checkAll &&
        (checkAll.onclick = function () {
            var e = document.querySelectorAll('.form-check-all input[type="checkbox"]');
            1 == checkAll.checked
                ? Array.from(e).forEach(function (e) {
                    (e.checked = !0), e.closest("tr").classList.add("table-active");
                })
                : Array.from(e).forEach(function (e) {
                    (e.checked = !1), e.closest("tr").classList.remove("table-active");
                });
        }),
            10),
    editlist = !1,
    options = { valueNames: ["id", "title", "email", "date", "phone", "status"], page: perPage, pagination: !0, plugins: [ListPagination({ left: 5, right: 5 })] };

document.getElementById("customerList") &&
(customerList = new List("customerList", options).on("updated", function (e) {
    0 == e.matchingItems.length ? (document.getElementsByClassName("noresult")[0].style.display = "block") : (document.getElementsByClassName("noresult")[0].style.display = "none");
    var t = 1 == e.i,
        a = e.i > e.matchingItems.length - e.page;
    document.querySelector(".pagination-prev.disabled") && document.querySelector(".pagination-prev.disabled").classList.remove("disabled"),
    document.querySelector(".pagination-next.disabled") && document.querySelector(".pagination-next.disabled").classList.remove("disabled"),
    t && document.querySelector(".pagination-prev").classList.add("disabled"),
    a && document.querySelector(".pagination-next").classList.add("disabled"),
        e.matchingItems.length <= perPage ? (document.querySelector(".pagination-wrap").style.display = "none") : (document.querySelector(".pagination-wrap").style.display = "flex"),
    e.matchingItems.length == perPage && document.querySelector(".pagination.listjs-pagination").firstElementChild.children[0].click(),
        0 < e.matchingItems.length ? (document.getElementsByClassName("noresult")[0].style.display = "none") : (document.getElementsByClassName("noresult")[0].style.display = "block");
}));
if ($('#customerList').length) {
    var isValue = customerList.items.slice(-1)[0]._values.id.innerHTML;
        idField = document.getElementById("id-field"),
        customerNameField = document.getElementById("customername-field"),
        emailField = document.getElementById("email-field"),
        dateField = document.getElementById("date-field"),
        phoneField = document.getElementById("phone-field"),
        statusField = document.getElementById("status-field"),
        addBtn = document.getElementById("add-btn"),
        editBtn = document.getElementById("edit-btn"),
        removeBtns = document.getElementsByClassName("remove-item-btn"),
        editBtns = document.getElementsByClassName("edit-item-btn");
}
function filterContact(e) {
    var t = e;
    customerList.filter(function (e) {
        e = (matchData = new DOMParser().parseFromString(e.values().status, "text/html")).body.firstElementChild.innerHTML;
        return "All" == e || "All" == t || e == t;
    }),
        customerList.update();
}
function updateList() {
    var a = document.querySelector("input[name=status]:checked").value;
    (data = userList.filter(function (e) {
        var t = !1;
        return "All" == a ? (t = !0) : ((t = e.values().sts == a), console.log(t, "statusFilter")), t;
    })),
        userList.update();
}
if ($('#customerList').length) {
refreshCallbacks(),
document.getElementById("slider_item_form") &&
(document.getElementById("slider_item_form").addEventListener("show.bs.modal", function (e) {
    e.relatedTarget.classList.contains("edit-item-btn")
        ? ((document.getElementById("exampleModalLabel").innerHTML = slide_update_title),
            (document.getElementById("slider_item_form").querySelector(".modal-footer").style.display = "block"),
            (document.getElementById("add-btn").innerHTML = slide_modal_save))
        : e.relatedTarget.classList.contains("add-btn")
            ? ((document.getElementById("exampleModalLabel").innerHTML = slide_create_title),
                (document.getElementById("slider_item_form").querySelector(".modal-footer").style.display = "block"),
                (document.getElementById("add-btn").innerHTML = slide_modal_save))
            : ((document.getElementById("exampleModalLabel").innerHTML = "List Customer"), (document.getElementById("slider_item_form").querySelector(".modal-footer").style.display = "none"));
}),
    ischeckboxcheck(),
    document.getElementById("slider_item_form").addEventListener("hidden.bs.modal", function () {
        clearFields();
    })),


    document.querySelector("#customerList").addEventListener("click", function () {
        ischeckboxcheck();
    });

var table = document.getElementById("customerTable"),
    tr = table.getElementsByTagName("tr"),
    trlist = table.querySelectorAll(".list tr"),
    count = 11,
    forms = document.querySelectorAll(".tablelist-form"),
    statusVal =
        (Array.prototype.slice.call(forms).forEach(function (a) {
            a.addEventListener(
                "submit",
                function (e) {
                    var t;
                    a.checkValidity()
                        ? (e.preventDefault(),
                            "" === customerNameField.value || "" === emailField.value || "" === dateField.value || "" === phoneField.value || editlist
                                ? "" !== customerNameField.value &&
                                "" !== emailField.value &&
                                "" !== dateField.value &&
                                "" !== phoneField.value &&
                                editlist &&
                                ((t = customerList.get({ id: idField.value })),
                                    Array.from(t).forEach(function (e) {
                                        (isid = new DOMParser().parseFromString(e._values.id, "text/html")).body.firstElementChild.innerHTML == itemId &&
                                        e.values({
                                            id: '<a href="javascript:void(0);" class="fw-medium link-primary">' + idField.value + "</a>",
                                            customer_name: customerNameField.value,
                                            email: emailField.value,
                                            date: dateField.value,
                                            phone: phoneField.value,
                                            status: isStatus(statusField.value),
                                        });
                                    }),
                                    document.getElementById("close-modal").click(),
                                    clearFields(),
                                    Swal.fire({ position: "center", icon: "success", title: "Customer updated Successfully!", showConfirmButton: !1, timer: 2e3, showCloseButton: !0 }))
                                : (customerList.add({
                                    id: '<a href="javascript:void(0);" class="fw-medium link-primary">#VZ' + count + "</a>",
                                    customer_name: customerNameField.value,
                                    email: emailField.value,
                                    date: dateField.value,
                                    phone: phoneField.value,
                                    status: isStatus(statusField.value),
                                }),
                                    customerList.sort("id", { order: "desc" }),
                                    document.getElementById("close-modal").click(),
                                    refreshCallbacks(),
                                    clearFields(),
                                    filterContact("All"),
                                    count++,
                                    Swal.fire({ position: "center", icon: "success", title: "Customer inserted successfully!", showConfirmButton: !1, timer: 2e3, showCloseButton: !0 })))
                        : (e.preventDefault(), e.stopPropagation());
                },
                !1
            );
        }),
            new Choices(statusField));
}
function isStatus(e) {
    switch (e) {
        case "Active":
            return '<span class="badge bg-success-subtle text-success text-uppercase">' + e + "</span>";
        case "Block":
            return '<span class="badge bg-danger-subtle text-danger text-uppercase">' + e + "</span>";
    }
}
function ischeckboxcheck() {
    Array.from(document.getElementsByName("checkAll")).forEach(function (e) {
        e.addEventListener("click", function (e) {
            e.target.checked ? e.target.closest("tr").classList.add("table-active") : e.target.closest("tr").classList.remove("table-active");
        });
    });
}
function refreshCallbacks() {
    removeBtns &&
    Array.from(removeBtns).forEach(function (e) {
        e.addEventListener("click", function (e) {
            e.target.closest("tr").children[1].innerText, (itemId = e.target.closest("tr").children[1].innerText);
            e = customerList.get({ id: itemId });
            Array.from(e).forEach(function (e) {
                var t = (deleteid = new DOMParser().parseFromString(e._values.id, "text/html")).body.firstElementChild;
                deleteid.body.firstElementChild.innerHTML == itemId &&
                document.getElementById("delete-record").addEventListener("click", function () {
                    customerList.remove("id", t.outerHTML), document.getElementById("deleteRecordModal").click();
                });
            });
        });
    }),
    editBtns &&
    Array.from(editBtns).forEach(function (e) {
        e.addEventListener("click", function (e) {
            e.target.closest("tr").children[1].innerText, (itemId = e.target.closest("tr").children[1].innerText);
            e = customerList.get({ id: itemId });
            Array.from(e).forEach(function (e) {
                var t = (isid = new DOMParser().parseFromString(e._values.id, "text/html")).body.firstElementChild.innerHTML;
                t == itemId &&
                ((editlist = !0),
                    (idField.value = t),
                    (customerNameField.value = e._values.customer_name),
                    (emailField.value = e._values.email),
                    (dateField.value = e._values.date),
                    (phoneField.value = e._values.phone),
                statusVal && statusVal.destroy(),
                    (statusVal = new Choices(statusField)),
                    (t = (val = new DOMParser().parseFromString(e._values.status, "text/html")).body.firstElementChild.innerHTML),
                    statusVal.setChoiceByValue(t),
                    flatpickr("#date-field", { dateFormat: "d M, Y", defaultDate: e._values.date }));
            });
        });
    });
}
function clearFields() {
    (customerNameField.value = ""), (emailField.value = ""), (dateField.value = ""), (phoneField.value = "");
}
function deleteMultiple(button) {
    var ids_array = [];
    var e = document.getElementsByName("chk_child");

    Array.from(e).forEach(function (checkbox) {
        if (checkbox.checked) {
            var id = checkbox.value;
            ids_array.push(id);
        }
    });
    console.log(ids_array);
    if (ids_array.length > 0) {
        var link = button.getAttribute('data-link');
        var title = button.getAttribute('data-title');
        var question = button.getAttribute('data-question');
        var no = button.getAttribute('data-no');
        var yes = button.getAttribute('data-yes');

        Swal.fire({
            customClass: {
                confirmButton: 'btn btn-success btn-label',
                denyButton: 'btn btn-danger btn-label'
            },
            iconHtml: '<lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>',
            title: title,
            text: question,
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: '<i class="bx bx-check label-icon"></i> ' + yes + '',
            denyButtonText: '<i class="bx bx-window-close label-icon "></i> ' + no + '',
        }).then((result) => {
            if (result.isConfirmed) {
                var deletePromises = ids_array.map(function (id) {
                    return fetch(link + id, { method: 'DELETE' }).then(function (response) {
                        if (response.ok) {
                            return id; // Silinen öğe ID'sini döndür
                        } else {
                            throw new Error('Delete operation failed for ID ' + id);
                        }
                    });
                });

                // Tüm silme işlemlerini kontrol et
                Promise.allSettled(deletePromises).then(function (results) {
                    var successfulDeletes = results.filter(function (result) {
                        return result.status === 'fulfilled';
                    }).map(function (result) {
                        return result.value;
                    });

                    if (successfulDeletes.length > 0) {
                        // Silme işlemi başarılı olan öğeleri arayüzden kaldır
                        successfulDeletes.forEach(function (id) {
                            customerList.remove("id", '<a href="javascript:void(0);" class="fw-medium link-primary">' + id + '</a>');
                        });

                        // Silme işlemi tamamlandıktan sonra yönlendirme yapılır.
                        window.location.href = link; // veya istediğiniz bir URL
                    } else {
                        // Hiçbir öğe silinmedi
                        Swal.fire({
                            title: "No items were deleted",
                            confirmButtonClass: "btn btn-info",
                            buttonsStyling: !1,
                            showCloseButton: !0
                        });
                    }
                });

                (document.getElementById("checkAll").checked = !1);
            } else if (result.isDenied) {
                Swal.close();
            }
        });
    } else {
        Swal.fire({ title: "Please select at least one checkbox", confirmButtonClass: "btn btn-info", buttonsStyling: !1, showCloseButton: !0 });
    }
}

document.querySelectorAll(".listjs-table").forEach(function (e) {
    e.querySelector(".pagination-next").addEventListener("click", function () {
        e.querySelector(".pagination.listjs-pagination") &&
        e.querySelector(".pagination.listjs-pagination").querySelector(".active") &&
        e.querySelector(".pagination.listjs-pagination").querySelector(".active").nextElementSibling.children[0].click();
    });
}),
    document.querySelectorAll(".listjs-table").forEach(function (e) {
        e.querySelector(".pagination-prev").addEventListener("click", function () {
            e.querySelector(".pagination.listjs-pagination") &&
            e.querySelector(".pagination.listjs-pagination").querySelector(".active") &&
            e.querySelector(".pagination.listjs-pagination").querySelector(".active").previousSibling.children[0].click();
        });
    });
