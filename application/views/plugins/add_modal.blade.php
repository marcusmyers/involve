<div class="modal hide" id="add_modal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3>Add A Phone Number</h3>
    </div>
    <div class="modal-body">
        <form method="POST" action="{{ URL::to('phones/add') }}" id="phone_modal_form">
            <label for="photo">Phone Number</label>
            <input type="text" id="inputPhone" name="phonenumb" placeholder="555-555-5555">
            <label class="control-label" for="inputGender">Gender</label>
            <div class="controls">
                <select id="inputType" name="addlocttype">
                   
                    <option>Test</option>
                    <option>Test2</option>
                    <option>Test3</option>
                </select>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Cancel</a>
        <button type="button" onclick="$('#phone_modal_form').submit();" class="btn btn-primary">Submit</a>
    </div>
</div>