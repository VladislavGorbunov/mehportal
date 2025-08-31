<div class="mt-4 mb-5">
<div class="row">

    <x-site.order.left-order-block :order="$order"/>

    <div class="col-12 col-md-8">
        <div class="row">
            <x-site.order.order-title-badge :order="$order"/>
            <x-site.order.order-info :order="$order"/>
        </div>

        <x-site.order.order-categories :order="$order" :regionSlug="$regionSlug"/>

        <x-site.order.order-description :order="$order"/>
        
        <p class="mt-3 mb-3 fs-5"><b>Контакты заказчика:</b></p>
           
            @if (Auth::guard('executor')->user())
                @if (Auth::guard('executor')->user()->premium || $order['customer_premium'])
                    <x-site.order.customer-contacts :order="$order"/>
                    <hr>
                    <x-site.order.customer-check :check="$customerCheck" :orderDate="$order['date']"/>
                @else
                    <x-site.order.hidden-customer-contacts />
                    <hr>
                    <x-site.order.hidden-customer-check :orderDate="$order['date']" />
                @endif
            @endif
       

        @if (Auth::guard('executor')->user())
            @if (!Auth::guard('executor')->user()->premium && !$order['customer_premium'])
                <div class="alert alert-primary mt-4 text-center">
                    <small>Контакты заказчика доступны зарегистрированным исполнителям с премиум тарифом.</small><br>
                    <p class="mt-3 mb-1">Тариф <b>«Premium»</b> - от 3990 руб/месяц <a href="" class="buy-tarif ms-2">Подключить</a></p>
                </div>
           
            @endif
        @else
            <x-site.order.hidden-customer-contacts/>
            <hr>
            <x-site.order.hidden-customer-check :orderDate="$order['date']" />
            @if (!$order['customer_premium'])
            <div class="alert alert-primary mt-4 text-center">
                <small>Контакты заказчика доступны зарегистрированным исполнителям с премиум тарифом.</small><br>
                <p class="mt-3 mb-1">Тариф <b>«Premium»</b> - от 3500 руб/месяц <a href="{{ Route('login-executor') }}" class="buy-tarif ms-2" target="_blank">Подключиться</a></p>
            </div>
            @else 
                <div class="alert alert-primary mt-4 py-4 text-center">
                    <small>Контакты заказчика доступны всем зарегистрированным и авторизованным исполнителям с любым тарифом. <a href="{{ Route('login-executor') }}" class="buy-tarif ms-2" target="_blank">Войти</a></small>
                </div>
            @endif
        @endif

    </div>
</div>
</div>