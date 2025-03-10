<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data"><br>
    @csrf
    @error("name")
  {{ $message }}
    @enderror
    <input type="text" name="name" placeholder="Ism" value="{{ old('name') }}"><br>
    @error("email")
    {{ $message }}
    @enderror
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
    @error("age")
     {{ $message }}
    @enderror
    <input type="number" name="age" placeholder="Yosh" min="8" value="{{ old('age') }}"><br>


    @error("profile_image")
   {{ $message }}
    @enderror
    <input type="file" name="profile_image" accept="., .jpg,"><br>

    @error("password")
       {{ $message }}
    @enderror
    <input type="password" name="password" placeholder="Parol"><br>

    @error("password_confirmation")
     {{ $message }}
    @enderror
    <input type="password" name="password_confirmation" placeholder="Parolni tasdiqlash"><br>


    @error("website")
   {{ $message }}
    @enderror
    <input type="url" name="website" placeholder="Veb-sayt" value="{{ old('website') }}"><br>

  
    @error("date")
   {{ $message }}
    @enderror
    <input type="date" name="date" value="{{ old('date') }}"><br>

 
    @error("number")
  {{ $message }}
    @enderror
    <input type="number" name="number" placeholder="Raqam" value="{{ old('number') }}"><br>

-
    <button type="submit">Submit</button>
</form>
