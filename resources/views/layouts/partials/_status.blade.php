<div class="form-group">
          <label for="status">Status</label>
          <select type="text" id="status" name="status" class="form-control" value="{{!empty($ticket)?$ticket->status: ''}}" required />

          @foreach($statuses as $status)
            <option value="{{$status->name}}" {{ !empty($ticket) && $ticket->status ==" $status->name" ? "selected": ""}}>{{$status->name}}</option>
          @endforeach
          </select>
   </div>
