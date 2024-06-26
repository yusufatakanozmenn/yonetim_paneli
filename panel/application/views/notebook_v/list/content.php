<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Not Defteri
        </h4>     

            <div class="wrap">
                <section class="app-content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="app-action-panel" id="calendar-action-panel">
                                <div class="action-panel-toggle" data-toggle="class"
                                    data-target="#calendar-action-panel" data-class="open">
                                    <i class="fa fa-chevron-right"></i>
                                    <i class="fa fa-chevron-left"></i>
                                </div><!-- .app-action-panel -->

                                <div class="m-b-lg">
                                    <a href="#" data-toggle="modal" data-target="#new_event_cat_modal"
                                        class="btn btn-lg btn-primary btn-block">Create New</a>
                                </div>

                                <div class="app-actions-list scrollable-container">
                                    <div id="external-events" class="m-b-lg">
                                        <p class="m-b-lg text-muted fs-italic">Drag an event from the list and drop it
                                            onto the calendar</p>
                                        <div data-class="info" class="info external-event">My Event 1</div>
                                        <div data-class="purple" class="purple external-event">My Event 2</div>
                                        <div data-class="success" class="success external-event">My Event 2</div>
                                        <div data-class="warning" class="warning external-event">My Event 3</div>
                                        <div data-class="pink" class="pink external-event">My Event 4</div>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" id="drop-remove" />
                                        <label for="drop-remove">remove after drop ?</label>
                                    </div>
                                </div><!-- .app-actions-list -->
                            </div><!-- .app-action-panel -->
                        </div><!-- END column -->

                        <div class="col-md-9">
                            <div id="fullcalendar"></div>
                        </div><!-- END column -->
                    </div><!-- .row -->
                </section><!-- .app-content -->
            </div><!-- .wrap -->

            <!-- new event category modal -->
            <div id="new_event_cat_modal" class="modal fade in" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Add a Category</h4>
                        </div>

                        <form action="#" id="new_event_cat_form">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="category_name">Category Name</label>
                                            <input type="text" name="category_name" id="category_name"
                                                class="form-control" placeholder="event name">
                                        </div><!-- .form-group -->
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="category_color">Category Color</label>
                                            <select name="category_color" id="category_color" class="form-control">
                                                <option value="primary" selected>Primary</option>
                                                <option value="success">Success</option>
                                                <option value="warning">Warning</option>
                                                <option value="danger">Danger</option>
                                                <option value="pink">Pink</option>
                                                <option value="purple">Purple</option>
                                                <option value="inverse">Inverse</option>
                                                <option value="dark">Dark</option>
                                            </select>
                                        </div><!-- .form-group -->
                                    </div>
                                </div>
                            </div><!-- .modal-body -->

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <input id="new_event_cat_submit" type="submit" class="btn btn-success" value="create" />
                            </div><!-- .modal-footer -->
                        </form>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- new event modal -->
            <div id="new_event_modal" class="modal fade in" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Create new Event</h4>
                        </div>

                        <form action="#" id="new_event_form">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="event_title">Event Name</label>
                                            <input type="text" name="event_title" id="event_title" class="form-control"
                                                placeholder="event name">
                                        </div><!-- .form-group -->
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="event_category">Event Category</label>
                                            <select name="event_category" id="event_category" class="form-control">
                                                <option value="primary" selected>Primary</option>
                                                <option value="success">Success</option>
                                                <option value="warning">Warning</option>
                                                <option value="danger">Danger</option>
                                                <option value="pink">Pink</option>
                                                <option value="purple">Purple</option>
                                                <option value="inverse">Inverse</option>
                                                <option value="dark">Dark</option>
                                            </select>
                                        </div><!-- .form-group -->
                                    </div>
                                </div>
                                <input type="hidden" id="event_start" value="">
                            </div><!-- .modal-body -->

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <input id="new_event_submit" type="submit" class="btn btn-success" value="Save Event" />
                            </div><!-- .modal-footer -->
                        </form>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
    </div><!-- .widget -->
</div><!-- END column -->
</div>