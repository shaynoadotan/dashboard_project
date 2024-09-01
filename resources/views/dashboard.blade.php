<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard v2</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
        <div class="container">
            <!-- Sidebar Menu -->
            <div class="sidebar">
                <div class="user-info">
                    <p>David Williams</p>
                    <p class="title">Art Director</p>
                </div>
                <nav>
                    <ul>
                        <li class="menu-item active">
                            <div class="menu-item-title">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <ul class="submenu">
                                <li>Dashboard v.1</li>
                                <li>Dashboard v.2</li>
                                <li>Dashboard v.3</li>
                                <li>Dashboard v.4</li>
                                <li>Dashboard v.5</li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <div>
                                <i class="fa fa-th-large"></i>
                                <span>Layouts</span>
                            </div>
                            <span></span>
                        </li>
                        <li class="menu-item">
                            <div>
                                <i class="fa fa-chart-line"></i>
                                <span>Graphs</span>
                            </div>
                            <span class="badge blue">16/24</span>
                        </li>
                        <li class="menu-item">
                            <div>
                                <i class="fa fa-envelope"></i>
                                <span>Mailbox</span>
                            </div>
                            <span></span>
                        </li>
                        <li class="menu-item">
                            <div>
                                <i class="fa fa-chart-pie"></i>
                                <span>Metrics</span>
                            </div>
                            <span></span>
                        </li>
                        <li class="menu-item">
                            <div>
                                <i class="fa fa-cubes"></i>
                                <span>Widgets</span>
                            </div>
                            <span></span>
                        </li>
                        <li class="menu-item">
                            <div>
                                <i class="fa fa-edit"></i>
                                <span>Forms</span>
                            </div>
                            <span></span>
                        </li>
                        <li class="menu-item">
                            <div>
                                <i class="fa fa-mobile-alt"></i>
                                <span>App Views</span>
                            </div>
                            <span class="badge">SPECIAL</span>
                        </li>
                        <li class="menu-item">
                            <div>
                                <i class="fa fa-file-alt"></i>
                                <span>Other Pages</span>
                            </div>
                            <span></span>
                        </li>
                        <li class="menu-item">
                            <div>    
                                <i class="fa fa-cogs"></i>
                                <span>Miscellaneous</span>
                            </div>
                            <span class="badge green">NEW</span>
                        </li>
                        <li class="menu-item">
                            <div>
                                <i class="fa fa-sliders-h"></i>
                                <span>UI elements</span>
                            </div>
                            <span></span>
                        </li>
                        <li class="menu-item">
                            <div>
                                <i class="fa fa-th"></i>
                                <span>Grid options</span>
                            </div>
                            <span></span>
                        </li>
                        <li class="menu-item">
                            <div>
                                <i class="fa fa-table"></i>
                                <span>Tables</span>
                            </div>
                            <span></span>
                        </li>
                        <li class="menu-item">
                            <div>
                                <i class="fa fa-shopping-cart"></i>
                                <span>E-Commerce</span>
                            </div>
                            <span></span>
                        </li>
                        <li class="menu-item">
                            <div>
                                <i class="fa fa-images"></i>
                                <span>Gallery</span>
                            </div>
                            <span></span>
                        </li>
                        <li class="menu-item">
                            <div>
                                <i class="fa fa-bars"></i>
                                <span>Menu levels</span>
                            </div>
                            <span></span>
                        </li>
                        <li class="menu-item">
                            <div>
                                <i class="fa fa-magic"></i>
                                <span>Animations</span>
                            </div>
                            <span class="badge">62</span>
                        </li>
                        <li class="menu-item landing">
                            <div>
                                <i class="fa fa-rocket"></i>
                                <span>Landing Page</span>
                            </div>
                            <span class="badge orange">NEW</span>
                        </li>
                    </ul>
                </nav>
            </div>
        <!-- Main Dashboard Content -->
            <main>
                <section class="top-metrics">
                    <div class="metric-box">
                        <p class="percentage">98%</p>
                        <div>
                            <h2>Income</h2>
                            <p class="value">$40,886,200</p>
                            <p class="period">Monthly</p>
                        </div>
                    </div>
                    <div class="metric-box">
                        <p class="percentage">20%</p>
                        <div>
                            <h2>Orders</h2>
                            <p class="value">275,800</p>
                            <p class="period">Annual</p>
                        </div>
                    </div>
                    <div class="metric-box">
                        <p class="percentage">44%</p>    
                        <div>
                            <h2>Visits</h2>
                            <p class="value">106,120</p>
                            <p class="period">Today</p>
                        </div>                    
                    </div>
                    <div class="metric-box">
                        <p class="percentage">38%</p>
                        <div class="content">
                            <h2>User Activity</h2>
                            <p class="value">80,600</p>
                            <p class="period">Low value</p>
                        </div>
                    </div>
                </section>

                <section class="charts">
                    <div class="orders-section">
                        <div class="orders-chart-details">
                            <div class="orders-chart">
                                <h3>Orders</h3>
                                <img src="orders-chart.png" alt="Orders Chart">
                            </div>
                            <div class="order-details">
                                <div class="order-item">
                                    <p>Total orders in period</p>
                                    <div class="bar"><div class="fill" style="width: 48%;"></div></div>
                                    <p class="percentage">48%</p>
                                </div>
                                <div class="order-item">
                                    <p>Orders in last month</p>
                                    <div class="bar"><div class="fill" style="width: 60%;"></div></div>
                                    <p class="percentage">60%</p>
                                </div>
                                <div class="order-item">
                                    <p>Monthly income from orders</p>
                                    <div class="bar"><div class="fill" style="width: 22%;"></div></div>
                                    <p class="percentage">22%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="lower-panels">
                    <div class="messages">
                        <h3>New Messages</h3>
                        <p>You have 22 new messages and 16 waiting in the draft folder.</p>
                        <ul>
                            
                        </ul>
                    </div>
                    <div class="right-panel">
                        <div class="todo-user-container">
                            <div class="user-projects">
                                <h3>User Project List</h3>
                                <hr>
                                <table class="user-projects-table">
                                    <tr>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>User</th>
                                        <th>Value</th>
                                    </tr>
                                    <tr>
                                        <td><span class="pending">Pending</span></td>
                                        <td>11:20pm</td>
                                        <td>Samantha</td>
                                        <td class="value-up">24%</td>
                                    </tr>
                                    <tr>
                                        <td><span class="cancelled">Cancelled</span></td>
                                        <td>10:40am</td>
                                        <td>Monica</td>
                                        <td class="value-down">66%</td>
                                    </tr>
                                    <tr>
                                        <td><span class="pending">Pending</span></td>
                                        <td>01:30pm</td>
                                        <td>John</td>
                                        <td class="value-up">54%</td>
                                    </tr>
                                    <tr>
                                        <td><span class="pending">Pending</span></td>
                                        <td>02:20pm</td>
                                        <td>Agnes</td>
                                        <td class="value-up">54%</td>
                                    </tr>
                                    <tr>
                                        <td><span class="completed">Completed</span></td>
                                        <td>04:10am</td>
                                        <td>Amelia</td>
                                        <td class="value-up">66%</td>
                                    </tr>
                                    <tr>
                                        <td><span class="pending">Pending</span></td>
                                        <td>12:08am</td>
                                        <td>Damian</td>
                                        <td class="value-up">23%</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="todo-list">
                                <h3>Small ToDo List</h3>
                                <ul>
                                    <li><input type="checkbox"> Buy a milk</li>
                                    <li><input type="checkbox"> Go to shop and find some products.</li>
                                    <li><input type="checkbox"> Send documents to Mike <span class="time">01 min</span></li>
                                    <li><input type="checkbox" checked> Go to the doctor <span class="time">5 min</span></li>
                                    <li><input type="checkbox"> Plan vacation</li>
                                    <li><input type="checkbox"> Create new stuff</li>
                                    <li><input type="checkbox"> Call to Anna for dinner</li>
                                </ul>
                            </div>
                        </div>
                        <div class="transactions">
                            <h3>Transactions Worldwide</h3>
                            <img src="transactions-chart.png" alt="Transactions Chart">
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <!-- JavaScript to load messages dynamically -->
    <script>
    function getTimeDifferenceString(date1, date2) {
        // Subtract the two dates (returns difference in milliseconds)
        const differenceInMs = date2 - date1;

        // Convert milliseconds to minutes
        const differenceInMinutes = Math.floor(differenceInMs / (1000 * 60));
        
        // Use hours format
        if (differenceInMinutes >= 60) {
            const differenceInHours = Math.floor(differenceInMinutes / 60);
            return `${differenceInHours}h ago`;
        }
    
        return `${differenceInMinutes}m ago`;
    }
    document.addEventListener('DOMContentLoaded', function() {
        fetch('/messages')
        .then(response => response.json())
        .then(data => {
            let messagesList = document.querySelector('.messages ul');
            messagesList.innerHTML = '';

            data.forEach(message => {
                let li = document.createElement('li');
                li.innerHTML = `
                    <div class="message-content">
                        <strong>${message.message_title}</strong>
                        <span>${message.message_body}</span>
                    </div>
                    <small>${getTimeDifferenceString(new Date(message.message_time), new Date())}</small>
                `;
                messagesList.appendChild(li);
            });
        })
        .catch(error => {
            console.error('Error fetching messages:', error);
        });
    });
    </script>
</body>
</html>

