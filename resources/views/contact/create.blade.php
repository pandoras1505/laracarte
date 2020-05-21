@extends('layouts.master', ['title'=>'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-10 mx-auto">
                <h2>Get In Touch</h2>
                <p><small class="text-muted">Si vous avez un problème avec cette application, pardon <a href="mailto:botcholi@gmail.com">Demandez de l'aide</a></small></p>
                
                <!--{ route('contact.store') }} permet de controller le formulaire-->
                <form action="{{ route('contact.store') }}" method="POST">@csrf

                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" required="required" value="{{ old('name') }}">
                        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>' ) !!}
                    </div>
                    
                    <div class="form-group">
                        <label for="email"class="control-label" >Email</label>
                        <input type="text" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" required="required" value="{{ old('email') }}">
                        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>' ) !!}
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="control-label sr-only" >Message</label>
                        <textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" required="required" value="{{ old('message') }}" name="message" id="message" rows="10"></textarea>
                        {!! $errors->first('message', '<div class="invalid-feedback">:message</div>' ) !!}
                    </div>
                    
                    <div class = "form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>     
@endsection