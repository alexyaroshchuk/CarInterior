@foreach($car as $c)
    <div class="fixed-overlay">
        <div class="modal fade" id="edit-arrival{{$c['car_id']}}" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="editForm{{$c['car_id']}}"
                          class="form-horizontal form-label-left"
                          method="POST"
                          action="{{route('car.update', ['car' => $c['car_id']])}}">
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
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['car_id']}}">Body type</label>
                                    <input type="text" value="{{ $c->body_type }}" class="form-control form-control-line"  name="body_type" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['car_id']}}">Capacity</label>
                                    <input type="text" value="{{ $c->capacity }}" class="form-control form-control-line" name="capacity" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['car_id']}}">Car cost</label>
                                    <input type="text" value="{{ $c->car_cost }}" class="form-control form-control-line" name="car_cost" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['car_id']}}">Colour</label>
                                    <input type="text" value="{{ $c->colour }}" class="form-control form-control-line" name="colour" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['car_id']}}">Daily cost</label>
                                    <input type="text" value="{{ $c->daily_cost }}" class="form-control form-control-line" name="daily_cost" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['car_id']}}">Free or rented out</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Product" tabindex="1" name="free_or_rented_out">
                                        <option value="0">Free</option>
                                        <option value="1">Rented</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['car_id']}}">Mark</label>
                                    <input type="text" value="{{ $c->mark }}" class="form-control form-control-line" name="mark" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['car_id']}}">Model</label>
                                    <input type="text" value="{{ $c->model }}" class="form-control form-control-line" name="model" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['car_id']}}">Provider</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Product" tabindex="1" name="provider_id">
                                        @foreach($provider as $p)
                                            @if($p == $c->provider)
                                                <option value="{{$p->provider_id}}" selected>{{ $p->full_name_of_provider }}</option>
                                            @else
                                                <option value="{{$p->provider_id}}">{{ $p->full_name_of_provider }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['car_id']}}">Year of issue</label>
                                    <input type="number" value="{{ $c->year_of_issue }}" class="form-control form-control-line" name="year_of_issue" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-warning" id="submit-edit-arrival{{$c['car_id']}}">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--@include('computer.editscript')--}}
@endforeach
