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
                                    class="form-control form-control-solid w-250px ps-13" placeholder="Search Customer" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a type="button" id="open-create-modal" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal-customer">
                                    <i class="ki-outline ki-plus fs-2"></i>Add New Customer
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="card-body py-4">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-bordered fs-6 gy-5" id="table-customer">
                            <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th>No</th>
                                    <th class="">Name</th>
                                    <th class="">Email</th>
                                    <th class="">Phone</th>
                                    <th class="">Address</th>
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

<div class="modal fade" id="modal-customer" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0">
                <!--begin::Close-->
                <h3 class="modal-title" id="title-customer">New Customer</h3>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y">
                <!--begin:Form-->
                <form id="form-customer" class="form">
                    <div class="mb-8">
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2" for="ip">
                                    <span class="required">Name</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" id="ip" name="ip"
                                    placeholder="Enter Customer Name" />
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2" for="port">
                                    <span class="required">Phone</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" id="port" name="port"
                                    placeholder="+62" />
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2" for="username">
                                    <span class="required">Email</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" id="username" name="username"
                                    placeholder="customer@mail.com" />
                            </div>
                            <!--end::Col-->

                            <div class="col-md-12 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2" for="ip">
                                    <span class="required">Address</span>
                                </label>
                                <textarea type="text" class="form-control form-control-solid" rows="7" id="address" name="address"
                                    placeholder="Enter Customer Address"></textarea>
                            </div>
                        </div>
                        <!--end::Input group-->
                    </div>
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="submit-button-customer">Save</button>
            </div>
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>