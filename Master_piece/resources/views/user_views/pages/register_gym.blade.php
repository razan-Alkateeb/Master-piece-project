@extends('user_views.layout.master')

@section('title')
    Register Gym
@endsection


@section('css')
@endsection



@section('content')
    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="./assets/images/bg/header.jpg">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title" style="color: white;">Register Your Gym</h1>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->



    <!-- Login & Register Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-1"> </div>
                <div class="col-lg-10">
                    @if (session('flash_message'))
                        <div
                            class="alert @if (session('flash_status') === 'deleted') alert-danger @else alert-success @endif">
                            {{ session('flash_message') }}
                        </div>
                    @endif
                    <div class="user-login-register bg-light">
                        <div class="login-register-title">
                            <h2 class="title">Register your gym</h2>
                            <div class="col-12 learts-mb-50">
                                <p>Your personal data will be used to support your experience throughout this
                                    website, to manage access to your account, and for other purposes described in
                                    our privacy policy</p>
                            </div>
                        </div>
                        <div class="login-register-form">

                            <form action="{{ route('storeGym') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row learts-mb-n50">

                                    <input type="hidden" value="{{ $owner->id }}" name="ownerId"  >
                                      {{-- Owner info --}}
                                    <div class="col-6 learts-mb-50">
                                        <label for="oname">Owner Name </label>
                                        <input id="oname" class="required" type="text" value="{{ $owner->name }}" readonly>
                                    </div>

                                    <div class="col-6 learts-mb-50">
                                        <label for="oemail">Owner Email </label>
                                        <input id="oemail" class="required" type="email" value="{{ $owner->email }}" readonly>
                                    </div>

                                    {{-- Name --}}
                                    <div class="col-12 learts-mb-50">
                                        <label for="name">Gym Name </label>
                                        <input id="name" class="required" type="text" name="name"
                                            placeholder="Enter your gym name">
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>


                                    {{-- description --}}
                                    <div class="col-12 learts-mb-50">
                                        <label for="description">Gym Description</label>
                                        <textarea id="description" class="required" name="description" cols="30" rows="1"
                                            placeholder="Tell us about your gym..."></textarea>
                                        <span class="text-danger">
                                            @error('description')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>



                                    <!-- Time range -->
                                    <div class="col-6 learts-mb-50">
                                        <label for="timestart">Working Hours start:</label>
                                        <input id="timestart" class="required" type="time" name="timestart"
                                            data-inputmask-alias="hh:mm" data-mask>
                                        <span class="text-danger">
                                            @error('timestart')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="col-6 learts-mb-50">
                                        <label for="timeend">Working Hours end:</label>
                                        <input id="timeend" class="required" type="time" name="timeend"
                                            data-inputmask-alias="hh:mm" data-mask>
                                        <span class="text-danger">
                                            @error('timeend')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>


                                    {{-- email & type  --}}

                                    <div class="col-6 learts-mb-50">
                                        <label for="gymemail">Gym Email</label>
                                        <input id="gymemail" class="required" type="email" name="gymemail"
                                            placeholder="Gym Email link">
                                        <span class="text-danger">
                                            @error('gymemail')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>


                                    <div class="col-6 learts-mb-50">
                                        <label for="type">Select Type</label>
                                        <select id="type" class="form-control required" name="type"
                                            style="height: 50px">
                                            @foreach ($types as $type)
                                                <option value="{{ $type->id }}">{{ $type->type_name }}</option>
                                            @endforeach
                                        </select>

                                    </div>


                                    {{-- Phone & Address  --}}
                                    <div class="col-6 learts-mb-50">
                                        <label for="phone">Phone number</label>
                                        <input id="phone" class="required" type="text" name="phone"
                                            >
                                        <span class="text-danger">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="col-6 learts-mb-50">
                                        <label for="address">Select Address</label>
                                        <select id="address" class="form-control required" name="address"
                                            style="height: 50px">
                                            <option value="Amman">Amman</option>
                                            <option value="Irbid">Irbid</option>
                                            <option value="Zarqa">Zarqa</option>
                                        </select>
                                    </div>

                                    {{-- Facebook & Instagram --}}

                                        <div class="col-6 learts-mb-50">
                                            <label for="facebook">Facebook</label>
                                            <input type="text" class=" required" name="facebook"
                                                id="facebook" placeholder="Facebook link">
                                            <span class="text-danger">
                                                @error('facebook')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>



                                        <div class="col-6 learts-mb-50">
                                            <label for="instagram">Instagram</label>
                                            <input type="text" class=" required" name="instagram"
                                                id="instagram" placeholder="Instagram link">
                                            <span class="text-danger">
                                                @error('instagram')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>




                                    {{-- image --}}
                                    <div class="col-12 learts-mb-50">
                                        <label for="image">Upload Image:</label>
                                        <input id="image" class=" required" type="file" name="image"
                                        placeholder="Enter gym image" accept="image/*">
                                        <span class="text-danger">
                                            @error('image')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>




                                    <div class="col-12 learts-mb-50">
                                        <p>Your personal data will be used to support your experience throughout this
                                            website, to manage access to your account, and for other purposes described in
                                            our privacy policy</p>
                                    </div>



                                    <div class="col-12 text-center learts-mb-50">
                                        <input type="submit" value="Register Gym"
                                            class="btn btn-dark btn-outline-hover-dark"><br>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>



            </div>

        </div>

    </div>
    <!-- Login & Register Section End -->
@endsection

@section('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Inputmask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#phone').inputmask({
                mask: "(962) 999-999-999",
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#facebook').inputmask('https://www.facebook.com/*{1,}');
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#instagram').inputmask('https://www.instagram.com/*{1,}');
        });
    </script>
@endsection
