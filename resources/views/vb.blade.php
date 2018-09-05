<div id="fh5co-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
										<strong>{{ $errors->first('firstname') }}</strong>
									</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
										<strong>{{ $errors->first('lastname') }}</strong>
									</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                            <!--<input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>-->

                                <select id="gender" class="form-control" name="gender" required>
                                    <option value=""
                                            @if (old('gender')=='')
                                            selected
                                            @endif
                                    >Choose</option>
                                    <option value="Male"
                                            @if (old('gender')=='Male')
                                            selected
                                            @endif
                                    >Male</option>
                                    <option value="Female"
                                            @if (old('gender')=='Female')
                                            selected
                                            @endif
                                    >Female</option>
                                </select>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
										<strong>{{ $errors->first('gender') }}</strong>
									</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nic') ? ' has-error' : '' }}">
                            <label for="nic" class="col-md-4 control-label">NIC</label>

                            <div class="col-md-6">
                                <input id="nic" type="text" class="form-control" name="nic" value="{{ old('nic') }}" required>

                                @if ($errors->has('nic'))
                                    <span class="help-block">
										<strong>{{ $errors->first('nic') }}</strong>
									</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Birthday</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" max="9999-12-31" value="{{ old('dob') }}" required>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
										<strong>{{ $errors->first('dob') }}</strong>
									</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                            <label for="contact" class="col-md-4 control-label">Contact</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control" name="contact" value="{{ old('contact') }}" required>

                                @if ($errors->has('contact'))
                                    <span class="help-block">
										<strong>{{ $errors->first('contact') }}</strong>
									</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>