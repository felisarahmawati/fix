<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label>Nama</label>
    <input type="name" name="name" class="form-control" placeholder="Username" aria-describedby="basic-addon1" value="{{ old('name') }}{{ $edit->name }}">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control @error('nama') is-invalid @enderror" placeholder="E-Mail" aria-describedby="basic-addon1"  value="{{ old('email') }}{{ $edit->email }}">
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="col mb-7">
    <label for="old_password" class="col-sm-2 col-form-label">{{ __('Password') }}</label>
    <div class="col mb-6">
        <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" autocomplete="old-password">
        @error('old_password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="col mb-7">
    <label for="password" class="col-sm-2 col-form-label">{{ __('New Password') }}</label>
    <div class="col mb-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
{{-- <div class="form-group">
    <label>Konfirmasi Password</label>
    <input type="password" name="confirm_password" class="form-control" placeholder="Konfirmasi Password" aria-describedby="basic-addon1">
    @error('confirm_password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div> --}}
<div class="form-group mb-3">
    <label>Jabatan</label>
    <div>
        <select class="form-select" name="id_role" id="id_role">
            <option value="">{{ $edit->id}}</option>
            @foreach ($role as $data)
             <option value="{{ $data->id }}">{{ $data->id }}</option>
            @endforeach
        </select>
    </div>
</div>
