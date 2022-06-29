<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link href="../css/admin.css" rel="stylesheet" type="text/css"/>
    <title >Admin Page</title>
</head>
<body class="bg-primary-color">
    <h1 class="mx-auto py-3 text-color" style="width: 300px;text-align: center; padding-bottom: 25px;">Dashboard</h1>
    <div class="container">
        <div class="row pb-4">
            <div class="col-md-3">
                <div class="d-flex flex-column" id="order_placed">
                    <span class="border-top-2"><p class="p-2 m-1"><strong>Order Placed</strong></p></span>
                    <div class="d-flex justify-content-between">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="50" fill="dark" class="bi bi-cart-check-fill p-1" viewBox="0 0 16 16">
                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                        </svg>

                        <!-- Data day ne -->
                        <h3 class="p-2 text-end">10</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex flex-column" id="completed_payment">
                <span class="border-top-2"><p class="p-2 m-1"><strong>Completed Payment</strong></p></span>
                    <div class="d-flex justify-content-between">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="50" fill="dark" class="bi bi-check-circle-fill p-1" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                        <!-- Data day ne -->
                        <h3 class="p-2 text-end">3</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex flex-column" id="product_added">
                <span class="border-top-2"><p class="p-2 m-1"><strong>Product Added</strong></p></span>
                    <div class="d-flex justify-content-between">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="50" fill="dark" class="bi bi-cart-plus p-1" viewBox="0 0 16 16">
                        <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                        <!-- Data day ne -->
                        <h3 class="p-2 text-end">35</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex flex-column" id="total_pendings">
                <span class="border-top-2"><p class="p-2 m-1"><strong>Total Pendings</strong></p></span>
                        <div class="d-flex justify-content-between">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="50" fill="dark" class="bi bi-hourglass-split p-1" viewBox="0 0 16 16">
                        <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
                        </svg>
                        <!-- Data day ne -->
                        <h3 class="p-2 text-end">25</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-4">
            <div class="col-md-3">
                <div class="d-flex flex-column" id="user">
                <span class="border-top-2"><p class="p-2 m-1"><strong>User</strong></p></span>
                    <div class="d-flex justify-content-between">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="50" fill="dark" class="bi bi-person-fill p-1" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        <!-- Data day ne -->
                        <h3 class="p-2 text-end">3</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex flex-column" id="admin">
                <span class="border-top-2"><p class="p-2 m-1"><strong>Admin</strong></p></span>
                    <div class="d-flex justify-content-between">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="50" fill="dark" class="bi bi-person-bounding-box p-1" viewBox="0 0 16 16">
                        <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        </svg>
                        <h3 class="p-2 text-end">3</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex flex-column" id="total_account">
                <span class="border-top-2"><p class="p-2 m-1"><strong>Total Account</strong></p></span>
                    <div class="d-flex justify-content-between">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="50" fill="dark" class="bi bi-person-check-fill p-1" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        <!-- Data day ne -->
                        <h3 class="p-2 text-end">3</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex flex-column" id="new_message">
                <span class="border-top-2"><p class="p-2 m-1"><strong>New Message</strong></p></span>
                    <div class="d-flex justify-content-between">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="50" fill="dark" class="bi bi-envelope-exclamation-fill p-1" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1.5a.5.5 0 0 1-1 0V11a.5.5 0 0 1 1 0Zm0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/>
                        </svg>
                        <!-- Data day ne -->
                        <h3 class="p-2 text-end">3</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>    
</html>