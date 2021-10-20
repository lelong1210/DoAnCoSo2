<div class="content">

<div class="container-fluid">
    <div class="page-title-box">

        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">Calendar</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Zegva</a>
                        </li>
                        <li class="breadcrumb-item active">Calendar</li>
                    </ol>
                </div>
            </div>

            <div class="col-md-4">
                <div class="float-right d-none d-md-block app-datepicker">
                    <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" id="datepicker">
                    <i class="mdi mdi-chevron-down mdi-drop"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- end page-title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-md-4">

                            <h4 class="mt-1 mb-3 font-14">Created Events</h4>
                            <form method="post" id="add_event_form" class="mt-1 mb-4">
                                <input type="text" class="form-control new-event-form" placeholder="Add new event..." />
                            </form>

                            <div id='external-events'>
                                <h4 class="mb-3 font-14">Draggable Events</h4>
                                <div class='fc-event'>My Event 1</div>
                                <div class='fc-event'>My Event 2</div>
                                <div class='fc-event'>My Event 3</div>
                                <div class='fc-event'>My Event 4</div>
                                <div class='fc-event'>My Event 5</div>
                            </div>

                            <!-- checkbox -->
                            <div class="custom-control custom-checkbox mt-3">
                                <input type="checkbox" class="custom-control-input" id="drop-remove" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                            </div>

                        </div>

                        <div id='calendar' class="col-xl-10 col-lg-9 col-md-8"></div>

                    </div>
                    <!-- end row -->

                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

</div>
<!-- container-fluid -->

</div>