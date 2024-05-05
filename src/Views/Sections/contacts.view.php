<div class="mt-3 mb-5">
    <form action="/sendContacts" method="post" novalidate>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Электронная почта</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ФИО</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>
