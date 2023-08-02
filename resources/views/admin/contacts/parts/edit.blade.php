<div class="modal-body">
    <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{ route('contacts.edit', $contact->id) }}">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $contact->id }}" name="id">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name" class="form-control-label">Name</label>
                    <input type="text" disabled class="form-control" name="name" id="name"
                        value="{{ $contact->name }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input type="text" disabled class="form-control" name="email" id="email"
                        value="{{ $contact->email }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone" class="form-control-label">phone</label>
                    <input type="text" disabled class="form-control" name="phone" disabled id="phone"
                        value="{{ $contact->phone }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email" class="form-control-label">Subject</label>
                    <input type="text" disabled class="form-control" name="subject" id="subject"
                        value="{{ $contact->subject }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="description" class="form-control-label">Description</label>
                    <textarea name="description" disabled class="form-control" id="" cols="30" rows="10">{{ $contact->description }}</textarea>
                </div>
            </div>
        </div>
</div>
</form>
</div>
<script>
    $('.dropify').dropify()
</script>
