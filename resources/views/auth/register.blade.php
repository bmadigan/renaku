@extends('layouts.app')

@section('content')
<div class="flex justify-center p-32">

        <div class="w-1/3">
            <div class="card">
                <div class="px-6 py-4">{{ __('Register') }}</div>

                <div class="px-6 py-4">
                    <form method="GET" action="{{ route('shopify.login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">

                                <div>
                                    <label class="input-field inline-flex items-baseline border-none shadow-md bg-white p-4">
                                        <div class="flex-1 leading-none">
                                            <input id="handle" type="text" name="domain" value="{{ old('domain') }}" required autocomplete="domain" autofocus class="placeholder-blue w-full p-2 border-b border-gray-200 no-outline text-dusty-blue-darker" name="handle" placeholder="acme">
                                        </div>
                                        <span class="flex-none text-gray-500 select-none leading-none">.myshopify.com</span>
                                    </label>
                                </div>


                                @error('comain')
                                    <span class="py-2 text-red-600" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="my-3">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Continue
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</div>
@endsection
