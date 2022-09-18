        <script src="{{asset('assets/Mainpage/js/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('assets/Mainpage/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/Mainpage/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/Mainpage/js/plugins.js')}}"></script>
        <script src="{{asset('assets/Mainpage/js/main.js')}}"></script>

        <script>

        function addToWishList(product_id)
        {
                $.ajax({

                        url: "{{URL::route('add.WishList')}}",
                        method: "POST",
                        data: {
                                'product_id': product_id,
                                '_token': "{{csrf_token()}}"
                        },
                        success: function (data) {


                                document.getElementById('wishlist_number').innerHTML = data['item_number'];
                        }
                });
        }

        function addToCart (product_id) {

                $.ajax({

                url: "{{URL::route('add.cart')}}",
                method: "POST",
                data: {
                        'product_id': product_id,
                        '_token': "{{csrf_token()}}"
                },
                success: function (data) {

                        console.log();

                        document.getElementById('cart_number').innerHTML = data['item_number'];
                        document.getElementById('cart_amount').innerHTML = "<b>My Cart </b> -tk " +data['total_price'].toFixed(2);
                // ei porjonto dekhben

                        if (data['success'] == true) {

                        var toastMixin = Swal.mixin({
                                toast: true,
                                icon: 'success',
                                title: 'General Title',
                                animation: false,
                                position: 'top-right',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,

                                didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                        });


                        toastMixin.fire({
                        animation: true,
                        title:data['message']
                });
                        } else {


                        var toastMixin = Swal.mixin({
                                toast: true,
                                icon: 'success',
                                title: 'General Title',
                                animation: false,
                                position: 'top-right',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,

                                didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                        });


                        toastMixin.fire({
                        title: data['message'],
                        icon: 'error'
                        });

                        }
                }

                });
        }
        </script>


