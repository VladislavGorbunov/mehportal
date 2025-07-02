<x-site.errors />
<x-site.message />
    <form action="/customer/profile/update" method="POST">
    @method('PUT')
    @csrf
        <div class="row mt-3">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label class="form-label">Имя:</label>
  					<input type="text" class="form-control" name="name" value="{{ $customer->name }}" >
                </div>

				<div class="mb-3">
  					<label class="form-label">Фамилия:</label>
  					<input type="text" class="form-control" name="lastname" value="{{ $customer->lastname }}">
				</div>	
            </div>
            
            <div class="col-12 col-md-6">
				<div class="mb-3">
                    <label class="form-label">Номер телефона для связи:</label>
  					<input type="tel" autocomplete="tel" class="form-control" name="phone" value="{{ $customer->phone }}" placeholder="+7 (123) 456-78-90">
                </div>

            </div>
        </div>

		<button type="submit" class="btn btn-blue mt-3 mb-3">Сохранить</button>

    </form>