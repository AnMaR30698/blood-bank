<!-- blood-request/form.blade.php -->
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form method="POST" action="/blood-request">
    @csrf

    <div class="form-group">
        <label for="name">اسمك</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="blood_group">زمرة الدم</label>
        <input type="text" name="blood_group" id="blood_group" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">إرسال الطلب</button>
</form>
