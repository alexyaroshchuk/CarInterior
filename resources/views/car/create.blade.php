<div class="fixed-overlay">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" style="background-color: #006149;">
            <div class="modal-content">
                <form id="createForm"
                      class="form-horizontal form-label-left"
                      method="POST"
                        action="{{route('car.insert')}}">
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
                                <label class="control-label">Body type</label>
                                <input type="text" class="form-control form-control-line" name="body_type" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Capacity</label>
                                <input type="number" class="form-control form-control-line" name="capacity" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Car Cost</label>
                                <input type="text" class="form-control form-control-line" name="car_cost" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Colour</label>
                                <input type="text" class="form-control form-control-line" name="colour" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Daily cost</label>
                                <input type="text" class="form-control form-control-line" name="daily_cost" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Free or rented out</label>
                                <select class="form-control custom-select" name="free_or_rented_out" required>
                                    <option value=0>Rented</option>
                                    <option value=1>Free</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Mark</label>
                                <input type="text" class="form-control form-control-line" name="mark" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Model</label>
                                <input type="text" class="form-control form-control-line" name="model" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Provider</label>
                                <select class="form-control form-control-line" name="provider_id">
                                    @foreach($provider as $p)
                                        <option value="{{$p->provider_id}}"> {{ $p->full_name_of_provider }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Year</label>
                                <input type="text" class="form-control form-control-line" name="year_of_issue" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning" id="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{--@include('computer.createscript')--}}
