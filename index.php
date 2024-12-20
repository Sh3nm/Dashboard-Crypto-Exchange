<?php
// Include konfigurasi database
require 'config.php';

// Query untuk mengambil transaksi
$stmt = $pdo->query("SELECT * FROM transactions");
$transactions = $stmt->fetchAll();

// Query untuk mengambil data lainnya, jika ada (misalnya, income, expenses)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Crypto Exhange</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">
</head>
<body>

    <nav>
        <div class="container">
            <img src="img/logo.png" class="logo">
            <div class="search-bar">
                <span class="material-icons-sharp">search</span>
                <input type="search" placeholder="Search">
            </div>
            <div class="profile-area">
                <div class="theme-btn">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="profile-photo">
                        <img src="img/profile.JPG">
                    </div>
                    <h5>Shenmue</h5>
                    <span class="material-icons-sharp">expand_more</span>
                </div>
                <button id = "menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
            </div>
        </div>
    </nav>
    
    <main>

        <aside>
            <button id="close-btn">
                <span class="material-icons-sharp">close</span>
            </button>
            <div class="sidebar">
                <a href="#" class="active">
                    <span class="material-icons-sharp">dashboard</span>
                    <h4>Dashboard</h4>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">currency_exchange</span>
                    <h4>Exchange</h4>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">account_balance_wallet</span>
                    <h4>Wallet</h4>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">payment</span>
                    <h4>Transaction</h4>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">pie_chart</span>
                    <h4>Analytic</h4>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">message</span>
                    <h4>Messages</h4>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">quiz</span>
                    <h4>Help Center</h4>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h4>Settings</h4>
                </a>
            </div>
            <div class="updates">
                <span class="material-icons-sharp">update</span>
                <h4>Update Available</h4>
                <small>Security Update</small>
                <small>General Update</small>
                <a href="#">Update Now</a>
            </div>
        </aside>

        <section class="middle">
            <div class="header">
                <h1>Overview</h1>
                <input type="date">
            </div>
            <div class="cards">
                <!--Kartu 1-->
                <div class="card">
                    <div class="top">
                        <div class="left">
                            <img src="img/Bitcoin.png" alt="">
                            <h2>BTC</h2>
                        </div>
                        <img src="img/Visa.png" class="right">
                    </div>
                    <div class="middle">
                        <h1>$543,106</h1>
                        <div class="chip">
                            <img src="img/chip.png" alt="">
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <small>Card Holder</small>
                            <h5>Huraira Shenmue Mahanee</h5>
                        </div>
                        <div class="right">
                            <div class="expiry">
                                <small>Expire</small>
                                <h5>07/26</h5>
                            </div>
                            <div class="cvv">
                                <small>CVV</small>
                                <h5>123</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Kartu 2-->
                <div class="card">
                    <div class="top">
                        <div class="left">
                            <img src="img/USDT.png" alt="">
                            <h2>USDT</h2>
                        </div>
                        <img src="img/MasterCard.png" class="right">
                    </div>
                    <div class="middle">
                        <h1>$901,201</h1>
                        <div class="chip">
                            <img src="img/chip.png" alt="">
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <small>Card Holder</small>
                            <h5>Huraira Shenmue Mahanee</h5>
                        </div>
                        <div class="right">
                            <div class="expiry">
                                <small>Expire</small>
                                <h5>12/01</h5>
                            </div> 
                            <div class="cvv">
                                <small>CVV</small>
                                <h5>091</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Kartu 3-->
                <div class="card">
                    <div class="top">
                        <div class="left">
                            <img src="img/ETH.png" alt="">
                            <h2>ETH</h2>
                        </div>
                        <img src="img/Revolut.png" class="right">
                    </div>
                    <div class="middle">
                        <h1>$277,762</h1>
                        <div class="chip">
                            <img src="img/chip.png" alt="">
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <small>Card Holder</small>
                            <h5>Huraira Shenmue Mahanee</h5>
                        </div>
                        <div class="right">
                            <div class="expiry">
                                <small>Expire</small>
                                <h5>09/24</h5>
                            </div>
                            <div class="cvv">
                                <small>CVV</small>
                                <h5>456</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="monthly-report">
                <div class="report">
                    <h3>Income</h3>
                    <div>
                        <details>
                            <h1>$19.230</h1>
                            <h4 class="succes">+4.6%</h4>
                        </details>
                        <p class="text-muted">Compared to $18.384 last month</p>
                    </div>
                </div>

                <div class="report">
                    <h3>Expenses</h3>
                    <div>
                        <details>
                            <h1>$9.110</h1>
                            <h4 class="danger">-6.2%</h4>
                        </details>
                        <p class="text-muted">Compared to $9,715 last month</p>
                    </div>
                </div>

                <div class="report">
                    <h3>Cashback</h3>
                    <div>
                        <details>
                            <h1>$4.390</h1>
                            <h4 class="succes">+2.9%</h4>
                        </details>
                        <p class="text-muted">Compared to $4,266 last month</p>
                    </div>
                </div>
                
                <div class="report">
                    <h3>Savings</h3>
                    <div>
                        <details>
                            <h1>$86,374</h1>
                            <h4 class="danger">-5.2%</h4>
                        </details>
                        <p class="text-muted">Compared to $91,111 last month</p>
                    </div>
                </div>
            </div>

            <div class="fast-payment">
                <h2>Fast Payment</h2>
                <div class="badges">
                    <div class="badge">
                        <span class="material-icons-sharp">add</span>
                    </div>
                    <div class="badge">
                        <span class="bg-primary"></span>
                        <div>
                            <h5>Gym</h5>
                            <h4>$30</h4>
                        </div>
                    </div>

                    <div class="badge">
                        <span class="bg-success"></span>
                        <div>
                            <h5>Internet</h5>
                            <h4>$77</h4>
                        </div>
                    </div>

                    <div class="badge">
                        <span class="bg-primary"></span>
                        <div>
                            <h5>Gas</h5>
                            <h4>$50</h4>
                        </div>
                    </div>

                    <div class="badge">
                        <span class="bg-primary"></span>
                        <div>
                            <h5>Skin Care</h5>
                            <h4>$200</h4>
                        </div>
                    </div>

                    <div class="badge">
                        <span class="bg-danger"></span>
                        <div>
                            <h5>Electricity</h5>
                            <h4>$97</h4>
                        </div>
                    </div>

                    <div class="badge">
                        <span class="bg-success"></span>
                        <div>
                            <h5>Food</h5>
                            <h4>$522</h4>
                        </div>
                    </div>
                </div> 
            </div>

            <canvas id="chart"></canvas>
        </section>

        <section class="right">
            <div class="investments">
                <div class="header">
                    <h2>Investments</h2>
                    <a href="#">More<span class="material-icons-sharp">expand_more</span></a>
                </div>

                <div class="investment">
                    <img src="img/bri.png" alt="BRI">
                    <h4>BRI</h4>
                    <div class="date-time">
                        <p>24 Mei, 2021</p>
                        <small class="text-muted">12:20</small>
                    </div>
                    <div class="bonds">
                        <p>1402</p>
                        <small class="text-muted">Bonds</small>
                    </div>
                    <div class="amount">
                        <h4>$972,81</h4>
                        <small class="success">+33.38%</small>
                    </div>
                </div>

                <div class="investment">
                    <img src="img/Uniliver.png" alt="Uniliver">
                    <h4>Uniliver</h4>
                    <div class="date-time">
                        <p>24 Mei, 2021</p>
                        <small class="text-muted">12:20</small>
                    </div>
                    <div class="bonds">
                        <p>1402</p>
                        <small class="text-muted">Bonds</small>
                    </div>
                    <div class="amount">
                        <h4>$111,15</h4>
                        <small class="success">+22.84%</small>
                    </div>
                </div>

                <div class="investment">
                    <img src="img/GoTo Logo.png" alt="GoTo">
                    <h4>GoTo</h4>
                    <div class="date-time">
                        <p>24 Mei, 2021</p>
                        <small class="text-muted">12:20</small>
                    </div>
                    <div class="bonds">
                        <p>1402</p>
                        <small class="text-muted">Bonds</small>
                    </div>
                    <div class="amount">
                        <h4>$101,81</h4>
                        <small class="danger">-86.85%</small>
                    </div>
                </div>

                <div class="investment">
                    <img src="img/United Tractors Logo.png" alt="UNTR">
                    <h4>UNTR</h4>
                    <div class="date-time">
                        <p>24 Mei, 2021</p>
                        <small class="text-muted">12:20</small>
                    </div>
                    <div class="bonds">
                        <p>1402</p>
                        <small class="text-muted">Bonds</small>
                    </div>
                    <div class="amount">
                        <h4>$1571,90</h4>
                        <small class="success">+22.01%</small>
                    </div>
                </div>
            </div>

            <div class="recent-transactions">
                <div class="heade">
                    <h2>Recent Transactions</h2>
                    <a href="#">more <span class="material-icons-sharp">expand_more</span></a>
                </div>

                <div class="transaction">
                    <div class="service">
                        <div class="icon-bg-purple-light">
                            <span class="material-icons-sharp">library_music</span>
                        </div>
                    </div>
                    <div class="details">
                        <h4>Music</h4>
                        <p>07.02.2023</p>
                    </div>
                    <div class="card-details">
                        <div class="card bg-danger">
                            <img src="img/Visa.png" alt="">
                        </div>
                        <div class="details">
                            <p>*3034</p>
                            <small class="text-muted">Credit Card</small>
                        </div>
                    </div>
                    <h4>-$8</h4>
                </div>

                <div class="transaction">
                    <div class="service">
                        <div class="icon-bg-purple-light">
                            <span class="material-icons-sharp">shopping_bag</span>
                        </div>
                    </div>
                    <div class="details">
                        <h4>Shopping</h4>
                        <p>07.02.2023</p>
                    </div>
                    <div class="card-details">
                        <div class="card bg-primary">
                            <img src="img/Visa.png" alt="">
                        </div>
                        <div class="details">
                            <p>*1111</p>
                            <small class="text-muted">Credit Card</small>
                        </div>
                    </div>
                    <h4>-$8</h4>
                </div>

                <div class="transaction">
                    <div class="service">
                        <div class="icon-bg-purple-light">
                            <span class="material-icons-sharp">restaurant</span>
                        </div>
                    </div>
                    <div class="details">
                        <h4>Restaurant</h4>
                        <p>07.02.2023</p>
                    </div>
                    <div class="card-details">
                        <div class="card bg-dark">
                            <img src="img/MasterCard.png" alt="">
                        </div>
                        <div class="details">
                            <p>*2324</p>
                            <small class="text-muted">Credit Card</small>
                        </div>
                    </div>
                    <h4>-$20</h4>
                </div>

                <div class="transaction">
                    <div class="service">
                        <div class="icon-bg-danger-light">
                            <span class="material-icons-sharp">sports_esports</span>
                        </div>
                    </div>
                    <div class="details">
                        <h4>Games</h4>
                        <p>07.02.2023</p>
                    </div>
                    <div class="card-details">
                        <div class="card bg-danger">
                            <img src="img/Visa.png" alt="">
                        </div>
                        <div class="details">
                            <p>*9090</p>
                            <small class="text-muted">Credit Card</small>
                        </div>
                    </div>
                    <h4>-$31</h4>
                </div> 
            </div>
        </section>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.0/chart.min.js" integrity="sha512-R60W3LgKdvvfwbGbqKusRu/434Snuvr9/Flhtoq9cj1LQ9P4HFKParULqOCAisHk/J4zyaEWWjiWIMuP13vXEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="setup.js"></script>
</body>
</html>