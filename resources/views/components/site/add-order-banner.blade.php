<hr class="mt-4">
<div class="promo position-relative">
        <h2 class="text-center mx-auto mb-1 mt-3 fs-4">Размещайте <span class="orange-text">заказы на мехобработку</span> или изготовление деталей бесплатно!</h2>
        <div class="col-12 col-md-10 mx-auto">
            <p class="text-center mb-2 mt-3">
                Нужно найти проверенного исполнителя для выполнения заказа? Разместите заявку на изготовление на нашем сайте, и получайте коммерческие предложения от
                проверенных исполнителей быстро, просто и без посредников. </p>
            
            <p class="text-center">Всем новым заказчикам дарим <span class="orange-text"><strong>Premium статус</strong></span> на 6 месяцев 😎</p>
        
        
            <div class="mt-4">
                @if (Auth::guard('customer')->user())
                    <a href="/customer/add-order" class="btn btn-add-order-site col-12 col-md-4 d-block mx-auto mb-3"><i class="bi bi-folder-plus mx-2"></i> Разместить заказ бесплатно</a>
                @else
                    <a href="/login/customer" class="btn btn-add-order-site col-12 col-md-4 d-block mx-auto mb-3"><i class="bi bi-folder-plus mx-2"></i> Разместить заказ бесплатно</a>
                @endif
            </div>
        </div>
        
    
        <div class="bi-logo"><i class="bi bi-fire"></i></div>
      
</div>

<style>
    .promo {
        background: rgb(21, 22, 23);
        border-radius: 15px;
        color: #fff !important; 
        padding: 35px 20px;
        overflow: hidden;
        border: none;
        margin: 25px 0;
    }
    
    .promo .bi-logo {
        position: absolute;
        right: -20px;
        bottom: -30px;
    }
    
    .promo .bi-logo .bi-fire {
        font-size: 80px;
        color: rgb(255, 95, 40);
        opacity: 0.9;
    }
    
    .orange-text {
        color: rgb(255, 95, 40);
    }
    
   
</style>

<hr class="mb-4">