<div class="fixed-overlay">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" style="background-color: #006149;">
            <div class="modal-content">
                <form id="createForm"
                      class="form-horizontal form-label-left"
                      method="POST"
                        action="{{route('contracts.insert')}}">
                    @csrf
                    <div class="form-group col-md-12">
                        <div class="modal-header row justified align-items-center">
                            <div><h3>Edit Info</h3></div>
                            <div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" style="font-family:'Georgia'; font-size:26px; font-weight:bold;"  >&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="form-group col-md-12">
                                <label class="control-label">Car</label>
                                <select class="form-control form-control-line" name="car_id">
                                    @foreach($car as $c)
                                        <option value="{{$c->car_id}}"> {{ $c->mark }}/{{$c->model}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Client</label>
                                <select class="form-control form-control-line" name="client_id">
                                    @foreach($client as $c)
                                        <option value="{{$c->client_id}}"> {{ $c->fullname }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Employee</label>
                                <select class="form-control form-control-line" name="employee_id">
                                    @foreach($employee as $e)
                                        <option value="{{$e->employee_id}}"> {{ $e->fullname }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Start date</label>
                                <input type="date" class="form-control form-control-line" name="start_of_contract" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">End date</label>
                                <input type="date" class="form-control form-control-line" name="end_of_contract" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Price</label>
                                <input type="text" class="form-control form-control-line" name="price" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning" id="submit">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
