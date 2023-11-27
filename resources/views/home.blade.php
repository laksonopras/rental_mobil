<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Posts</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <a class="navbar-brand h1 ms-4" href={{ route('posts.index') }}>
                <img src="/MalangDrift.png">
            </a>
            <div class="container text-center row justify-content-center">
                <div class="col ">
                    <a class="btn btn-sm btn-info" href={{ route('posts.create') }}>Home</a>
                    <a class="btn btn-sm btn-info" href={{ route('posts.create') }}>Cars</a>
                    <a class="btn btn-sm btn-info" href={{ route('posts.create') }}>Location</a>
                    <a class="btn btn-sm btn-info" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; --bs-btn-width: .75rem;" href={{ route('posts.create') }}>Your Order</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <img src="/mobil.png" class="col-sm">
            <div class="col align-self-center ">
                <p class="col-sm h1">Where Fast Cars <br> Meet Faster Lives</p>
                <div class="row">
                    <div class="col-sm">
                        <a class="btn btn-sm btn-info" href={{ route('posts.create') }}>Choose Your Ride</a>
                        <a class="btn btn-sm btn-dark" href={{ route('posts.create') }}>Contact US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <img src="/step.png" class="col-sm">
        </div>
    </div>

    <div class="container mt-5">
        <div class="row bg-image" style="background-image: url('bg.png');height: 50rem">
            <!-- <img src="/bg.png" class="col-sm"> -->
            <!-- <div class="card" style="width: 18rem; height: 20rem; margin-top: 12rem; margin-left: 8rem;">
                <img src="mobil1.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <img src="list.png" class="img-fluid img-thumbnail">
                    <a href="#" class="btn btn-primary mt-2">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; height: 20rem; margin-top: 12rem; margin-left: 8rem;">
                <img src="mobil1.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <img src="list.png" class="img-fluid img-thumbnail">
                    <a href="#" class="btn btn-primary mt-2">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; height: 20rem; margin-top: 12rem; margin-left: 8rem;">
                <img src="mobil1.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <img src="list.png" class="img-fluid img-thumbnail">
                    <a href="#" class="btn btn-primary mt-2">Go somewhere</a>
                </div>
            </div> -->

            <div class="row m-3">
                <div class="col-4 p-3" style="margin-top: 10rem;">
                    <div class="card">
                        <img src="mobil.png" style="width: 100%; height: 300px">
                        <div class="card-body">
                            <h5 class="card-title mb-2">merk</h5>
                            <div class="my-0 mx-0">
                                <div class="d-flex align-items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffbf00" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <span class="ms-2">rate</span>
                                </div>
                                <div class="row mx-0 mb-2">
                                    <div class="col-4 d-flex align-items-center px-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                            <path d="M8.34147 0.561539C8.90649 0.561358 9.45252 0.765594 9.87873 1.13654C10.3049 1.50749 10.5826 2.02011 10.6604 2.57977C10.7381 3.13942 10.6108 3.70831 10.3019 4.18143C9.99306 4.65457 9.52343 4.99997 8.97976 5.15388V8.43388C8.97976 8.60317 8.91252 8.76552 8.79281 8.88523C8.67311 9.00493 8.51075 9.07218 8.34147 9.07218C8.17218 9.07218 8.00982 9.00493 7.89011 8.88523C7.77042 8.76552 7.70316 8.60317 7.70316 8.43388V5.15388C7.16071 4.99878 6.69252 4.65302 6.3847 4.1802C6.07687 3.70738 5.95014 3.13931 6.02782 2.58049C6.10548 2.02167 6.38234 1.5097 6.80743 1.13875C7.23252 0.767795 7.77728 0.562824 8.34147 0.561539ZM9.4053 2.90197C9.4053 2.61982 9.29322 2.34924 9.09371 2.14973C8.8942 1.95022 8.62361 1.83813 8.34147 1.83813C8.05932 1.83813 7.78873 1.95022 7.58922 2.14973C7.38972 2.34924 7.27763 2.61982 7.27763 2.90197C7.27763 3.18412 7.38972 3.4547 7.58922 3.65421C7.78873 3.85372 8.05932 3.96579 8.34147 3.96579C8.62361 3.96579 8.8942 3.85372 9.09371 3.65421C9.29322 3.4547 9.4053 3.18412 9.4053 2.90197ZM16.0011 4.39132C16.0011 3.82703 15.7768 3.28586 15.3778 2.88684C14.9789 2.48784 14.4376 2.26367 13.8733 2.26367C13.3091 2.26367 12.7679 2.48784 12.3689 2.88684C11.9699 3.28586 11.7457 3.82703 11.7457 4.39132V7.37006H9.83083V8.64665H13.0223V4.39132C13.0223 4.16561 13.112 3.94914 13.2716 3.78953C13.4312 3.62992 13.6477 3.54026 13.8733 3.54026C14.0992 3.54026 14.3155 3.62992 14.4752 3.78953C14.6348 3.94914 14.7245 4.16561 14.7245 4.39132V14.6041C14.7245 14.8298 14.6348 15.0463 14.4752 15.2059C14.3155 15.3654 14.0992 15.4552 13.8733 15.4552C13.6477 15.4552 13.4312 15.3654 13.2716 15.2059C13.112 15.0463 13.0223 14.8298 13.0223 14.6041V10.3488H9.19253V14.6041C9.19253 14.8298 9.10287 15.0463 8.94326 15.2059C8.78365 15.3654 8.56718 15.4552 8.34147 15.4552C8.11575 15.4552 7.89927 15.3654 7.73968 15.2059C7.58007 15.0463 7.4904 14.8298 7.4904 14.6041V10.3488H2.38401C2.27115 10.3488 2.16292 10.3039 2.08311 10.2241C2.00331 10.1443 1.95848 10.0361 1.95848 9.92325V4.39132C1.95848 4.16561 2.04814 3.94914 2.20775 3.78953C2.36736 3.62992 2.58383 3.54026 2.80954 3.54026C3.03526 3.54026 3.25174 3.62992 3.41133 3.78953C3.57094 3.94914 3.66061 4.16561 3.66061 4.39132V8.64665H6.8521V7.37006H4.9372V4.39132C4.9372 3.82703 4.71304 3.28586 4.31403 2.88684C3.91501 2.48784 3.37384 2.26367 2.80954 2.26367C2.24525 2.26367 1.70408 2.48784 1.30506 2.88684C0.906047 3.28586 0.681885 3.82703 0.681885 4.39132V9.92325C0.681885 10.3747 0.861216 10.8076 1.18043 11.1268C1.49964 11.446 1.93258 11.6254 2.38401 11.6254H6.21381V14.6041C6.21381 15.1684 6.43797 15.7095 6.83698 16.1086C7.236 16.5076 7.77717 16.7317 8.34147 16.7317C8.90576 16.7317 9.44693 16.5076 9.84595 16.1086C10.245 15.7095 10.4691 15.1684 10.4691 14.6041V11.6254H11.7457V14.6041C11.7457 15.1684 11.9699 15.7095 12.3689 16.1086C12.7679 16.5076 13.3091 16.7317 13.8733 16.7317C14.4376 16.7317 14.9789 16.5076 15.3778 16.1086C15.7768 15.7095 16.0011 15.1684 16.0011 14.6041V4.39132Z" fill="#828282" />
                                        </svg>
                                        <span class="ms-2">Auto</span>
                                    </div>
                                    <div class="col-4 d-flex align-items-center px-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="14" viewBox="0 0 11 14" fill="none">
                                            <path d="M2.03833 10.7066C2.03833 10.7066 0.0383301 5.37326 0.0383301 2.70659C0.0383301 0.0399168 1.37166 0.039917 1.37166 0.039917H2.03833C2.03833 0.039917 2.70499 0.0399169 2.70499 0.706587C2.70499 1.37326 2.03833 1.37326 2.03833 2.70659C2.03833 4.03992 4.03833 5.37326 4.03833 7.37326C4.03833 9.37329 2.03833 10.7066 2.03833 10.7066ZM5.37166 10.0399C4.70499 10.0399 2.70499 11.7066 2.70499 11.7066C2.50499 11.8399 2.57166 12.0399 2.70499 12.2399C2.70499 12.2399 3.37166 13.4399 4.70499 13.4399H8.70497C9.43837 13.4399 10.0384 12.8399 10.0384 12.1066V11.4399C10.0384 10.7066 9.43837 10.1066 8.70497 10.1066H5.37166V10.0399Z" fill="#828282" />
                                        </svg>
                                        <span class="ms-2"> Person</span>
                                    </div>
                                    <div class="col-4 d-flex align-items-center px-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.2689 3.72351L14.2799 3.71007L11.1175 1.14852L10.1213 2.37711L11.7555 3.70059C11.3501 3.94693 11.0282 4.30954 10.8316 4.74128C10.6351 5.17302 10.573 5.65391 10.6534 6.12141C10.772 6.83216 11.2614 7.44647 11.8947 7.79038C12.6022 8.1754 13.2229 8.13982 13.7747 7.94375L13.7628 12.8313C13.7638 12.9622 13.7321 13.0912 13.6706 13.2069C13.6092 13.3224 13.5198 13.4209 13.4106 13.4931C13.3016 13.5655 13.1762 13.6096 13.0458 13.6213C12.9153 13.633 12.7842 13.612 12.6639 13.5602C12.5697 13.52 12.4843 13.4616 12.4125 13.3886C12.3394 13.3154 12.2814 13.2284 12.2419 13.1329C12.2026 13.0372 12.1822 12.9347 12.1825 12.8313L12.2006 11.25C12.2014 10.9389 12.1406 10.6306 12.0215 10.343C11.9026 10.0555 11.7277 9.79438 11.5072 9.57476C11.287 9.35403 11.0254 9.1789 10.7374 9.05938C10.4494 8.93986 10.1406 8.87831 9.82879 8.87824H9.03819V2.55342C9.03819 2.13405 8.87159 1.73187 8.57507 1.43534C8.27853 1.1388 7.87634 0.972214 7.45698 0.972214H1.92276C1.5034 0.972214 1.10121 1.1388 0.804677 1.43534C0.508144 1.73187 0.341553 2.13405 0.341553 2.55342V13.6219C0.341553 14.0412 0.508144 14.4434 0.804677 14.7399C1.10121 15.0365 1.5034 15.2031 1.92276 15.2031H7.45698C7.87634 15.2031 8.27853 15.0365 8.57507 14.7399C8.87159 14.4434 9.03819 14.0412 9.03819 13.6219V10.4595H9.82879C9.93632 10.4595 10.0399 10.4808 10.1379 10.5211C10.3261 10.6035 10.4761 10.754 10.5577 10.9425C10.5987 11.0398 10.6197 11.1444 10.6194 11.25L10.6004 12.8313C10.6004 13.1523 10.6629 13.4629 10.787 13.7547C10.9064 14.0385 11.0779 14.2923 11.2938 14.5065C11.5132 14.7283 11.7747 14.9042 12.0628 15.0237C12.3511 15.1434 12.6602 15.2043 12.9722 15.2031C13.2932 15.2031 13.6031 15.1414 13.8957 15.0165C14.1787 14.8979 14.4332 14.7264 14.6475 14.5097C14.8688 14.2899 15.0444 14.0284 15.1639 13.7403C15.2835 13.4522 15.3448 13.1432 15.3441 12.8313L15.363 5.71584C15.3622 5.31865 15.2617 4.92804 15.0704 4.5799C14.8792 4.23177 14.6036 3.93727 14.2689 3.72351ZM7.45698 4.92523H1.92276V2.55342H7.45698V4.92523ZM12.9912 6.50643C12.7815 6.50643 12.5804 6.42314 12.4321 6.27487C12.2839 6.12661 12.2006 5.92551 12.2006 5.71584C12.2006 5.50615 12.2839 5.30505 12.4321 5.15679C12.5804 5.00853 12.7815 4.92523 12.9912 4.92523C13.2008 4.92523 13.402 5.00853 13.5503 5.15679C13.6985 5.30505 13.7818 5.50615 13.7818 5.71584C13.7818 5.92551 13.6985 6.12661 13.5503 6.27487C13.402 6.42314 13.2008 6.50643 12.9912 6.50643Z" fill="#828282" />
                                        </svg>
                                        <span class="ms-2">fuel</span>
                                    </div>
                                </div>
                                <div class="row mx-0 mb-2">
                                    <div class="col-6 bg-dark">
                                        <h5 class="my-2 text-light">Rp. </h5>
                                    </div>
                                    <div class="col-6 bg-primary">
                                        <h5 class="my-2 text-center text-light">Rent Now</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="" style="width: 20rem;">
                        <a href="#" class="btn btn-primary mt-2" style="width: 5rem;">Go somewhere</a>
                    </div> -->
                </div>
                <div class="container text-center row justify-content-center">
                    <div class="col ">
                        <a class="btn btn-sm btn-outline-light" href={{ route('posts.create') }}>Show All Vehicle</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class=" mt-5">
        <div class="row">
            <img src="/foot.png" class="col-sm">
        </div>
    </div>
</body>

</html>