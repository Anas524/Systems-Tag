<form method="post" action="{{ route('contact.form.submit') }}">
    @csrf
    <div class="fields">
        <div class="field half lDir">
            <label for="name" data-lang-ar="اسم" data-lang-en="Name">اسم</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" />
            @error('name')
                <div class="error error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div class="field half lDir">
            <label for="email" data-lang-ar="بريد إلكتروني" data-lang-en="Email">بريد إلكتروني</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}" />
            @error('email')
                <div class="error error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div class="field lDir">
            <label for="message" data-lang-ar="رسالة" data-lang-en="Message">رسالة</label>
            <textarea name="message" id="message" rows="4">{{ old('message') }}</textarea>
            @error('message')
                <div class="error error-msg">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <ul class="actions lDir">
        <li><input class="as-button" type="submit" value="إرسال رسالة" class="primary" data-lang-ar="إرسال رسالة" data-lang-en="Send Message"/></li>
        <li><input class="as-button" type="reset" value="إعادة ضبط" data-lang-ar="إعادة ضبط" data-lang-en="Reset"/></li>
    </ul>
</form>

@if(session('success'))
<div class="success-msg">
    {{ session('success') }}
</div>
@endif

@if ($errors->any())
    <script>
        window.onload = function() {
            var referrer = document.referrer;  // Get the referrer URL
            if (referrer.includes("about")) {
                window.location.hash = "#aboutContact";  // Scroll to the #aboutContact section
            } else if (referrer.includes("legal")) {
                window.location.hash = "#contact";  // Scroll to the #contact section
            }
        }
    </script>
@endif