<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="card">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
                                <input type="text" data-kt-user-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-13" placeholder="Search Order" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a type="button" id="open-create-modal" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal-order">
                                    <i class="ki-outline ki-plus fs-2"></i>Add New Order
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="card-body py-4">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-bordered fs-6 gy-5" id="table-order">
                            <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th>No</th>
                                    <th class="">Transaction Code</th>
                                    <th class="">Customer</th>
                                    <th class="">Total</th>
                                    <th class="">Date</th>
                                    <th class="min-w-100px"></th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold">

                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-order" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0">
                <!--begin::Close-->
                <h3 class="modal-title" id="title-order">New Order</h3>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y">
                <!--begin:Form-->
                <form id="form-order" class="form" enctype="multipart/form-data">
                    <div class="mb-8">
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">

                                <!--begin::Label-->
                                <label class="required fs-6 fw-semibold form-label mb-2" for="customer">Customer</label>
                                <!--end::Label-->
                                <select class="form-select form-select-solid" data-placeholder="Choose Customer" data-control="select2"
                                    name="customer" id="customer" data-dropdown-parent="#modal-customer">
                                    <option></option>
                                </select>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2" for="ip">
                                    <span class="required">Choose Item</span>
                                </label>
                                <!--begin:Option-->
                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                    <!--begin:Label-->
                                    <span class="d-flex align-items-center me-2">
                                        <!--begin:Icon-->
                                        <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label bg-light-primary">
                                                <i class="ki-duotone ki-abstract-24 fs-1 text-primary"><span class="path1"></span><span
                                                        class="path2"></span></i>
                                            </span>
                                        </span>
                                        <!--end:Icon-->

                                        <!--begin:Info-->
                                        <span class="d-flex flex-column">
                                            <span class="fw-bold fs-6">Item 1</span>
                                            <span class="fs-7 text-muted">Rp 10.0000</span>
                                        </span>
                                        <!--end:Info-->
                                    </span>
                                    <!--end:Label-->

                                    <!--begin:Input-->
                                    <span class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="category" value="1" />
                                    </span>
                                    <!--end:Input-->
                                </label>
                                <!--end::Option-->

                                <!--begin:Option-->
                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                    <!--begin:Label-->
                                    <span class="d-flex align-items-center me-2">
                                        <!--begin:Icon-->
                                        <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label bg-light-primary">
                                                <i class="ki-duotone ki-abstract-24 fs-1 text-primary"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i>
                                            </span>
                                        </span>
                                        <!--end:Icon-->

                                        <!--begin:Info-->
                                        <span class="d-flex flex-column">
                                            <span class="fw-bold fs-6">Item 2</span>
                                            <span class="fs-7 text-muted">Rp 20.000</span>
                                        </span>
                                        <!--end:Info-->
                                    </span>
                                    <!--end:Label-->

                                    <!--begin:Input-->
                                    <span class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="category" value="2" />
                                    </span>
                                    <!--end:Input-->
                                </label>
                                <!--end::Option-->

                                <!--begin:Option-->
                                <label class="d-flex flex-stack cursor-pointer">
                                    <!--begin:Label-->
                                    <span class="d-flex align-items-center me-2">
                                        <!--begin:Icon-->
                                        <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label bg-light-primary">
                                                <i class="ki-duotone ki-abstract-24 fs-1 text-primary"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span></i>
                                            </span>
                                        </span>
                                        <!--end:Icon-->

                                        <!--begin:Info-->
                                        <span class="d-flex flex-column">
                                            <span class="fw-bold fs-6">Item 3</span>
                                            <span class="fs-7 text-muted">Rp 30.000</span>
                                        </span>
                                        <!--end:Info-->
                                    </span>
                                    <!--end:Label-->

                                    <!--begin:Input-->
                                    <span class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="category" value="3" />
                                    </span>
                                    <!--end:Input-->
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Col-->
                            <div class="col-md-12 fv-row">
                                <h3>Total : Rp 0</h3>
                            </div>
                        </div>
                        <!--end::Input group-->
                    </div>
                </form>

                <!--end:Form-->
            </div>
            <!--end::Modal body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="submit-button-order">Save</button>
            </div>
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>