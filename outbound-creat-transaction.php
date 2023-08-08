<?php
    include '../db.php';
    $sel = "SELECT * FROM `client_data`";
    $data = mysqli_query($conn,$sel);
    //  print_r("<pre>");
    $get = mysqli_fetch_array($data);
    // print_r($get);
    
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>outbound-create-transaction</title>
    <!-- start :: fevicon -->
    <link rel="icon" href="../assets/images/figma icon.png">
    <!-- end :: fevicon -->
    <!-- start :: bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- end :: bootstrap css -->
    <!-- start :: bootstrap icon css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- end :: bootstrap icon css -->
    <!-- start :: custom font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- start :: custom font -->
    <!-- start :: custom css-->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <!-- end :: custom css -->
</head>

<body>

    <!-- start :: header -->
    <section class="header_section">
        <div class="top_header">
            <h2>Outbound-Create Transaction</h2>
            <div class="right_user_setting">
                <a href="#" class="message">
                    <i class="bi bi-bell"></i>
                    <span>Notification
                        <table class="head_table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Module</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Customer Onboarding</td>
                                    <td>Verify New Client</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Transaction</td>
                                    <td>Approve Transaction</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Transaction</td>
                                    <td>Review Transaction</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Sanction Screening</td>
                                    <td>Case Created</td>
                                </tr>
                            </tbody>
                        </table>
                    </span>
                </a>
                <a href="#" class="user_info">
                    <img src="../assets/images/User_cicrle_light.png" alt="">
                    <div class="user_info__content">
                        <span>User name</span>
                        <span>Corporate</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="sidebar" id="style-3">
            <h1 class="site_logo">
                <a href="#">
                    <img src="../assets/images/figma icon.png" alt="../assets/images/figma icon.png">
                    <span>Company name</span>
                </a>
            </h1>
            <div class="sidebar_menu">
                <ul class="side_menu">
                    <li class="side_menu__item">
                        <a href="#">
                            <img src="../assets/images/customer.png" alt="../assets/images/customer.png">
                            <span>Customer</span>
                        </a>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="#">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Stakeholder</span>
                                </a>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer/new_creat_stakeholder.php">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Add New Stakeholder</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer/pending_stakeholder_list_1.php">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Pending Stakeholder</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer/stakeholder_list.php">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Stakeholder List</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer/archive_stakeholder.php">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Archive Stakeholder</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="#">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Legal entity</span>
                                </a>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer/create_new_legal_entity_edit.php">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Add New Legal Entity</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer/pending_legal_entity.php">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Pending Legal Entity</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer/legal_entity_risk_list.php">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Legal Entity List</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer/archive_legal_entity.php">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Archive Legal Entity </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="#">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Client</span>
                                </a>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer/new_client.php">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Add New Client</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer/pending_client_List.php">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Pending Client</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer/client_risk_list.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Client List</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer/archive_client_entity.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Archive Client Entity</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="#">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Customer Report</span>
                                </a>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer/stakeholder_report.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Stakeholder Report</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer/legal_entity_report.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Legal Entity Report</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer/client_report.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Client Report</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="side_menu__item">
                        <a href="#">
                            <img src="../assets/images/transaction.png" alt="../assets/images/transaction.png">
                            <span>Transaction </span>
                        </a>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="#">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Outbound Transaction</span>
                                </a>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="outbound-creat-transaction.php">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Create Transaction</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="outbound_draft_transaction.php">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Draft Transaction </span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="outbound_transaction_verification.php">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Transaction Verification</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="outbound_transaction_validation.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Transaction Validation</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="outbound_transaction_approval.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Transaction Approval</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="outbound_transaction_callback.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Transaction Call back</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="outbound_reject_transaction.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Rejected Transaction </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="#">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Inbound Transaction</span>
                                </a>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="inbound_create_transaction.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Create Transaction</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="inbound_transaction_draft.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Draft Transaction </span>
                                        </a>
                                    </li>

                                    <li class="grand_sub_side_menu__item">
                                        <a href="inbound_transaction_approval.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Transaction Approval</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="inbound_transaction_reject.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Rejected Transaction </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="transaction_report.html">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Transaction Report</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="#">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Transaction Case</span>
                                </a>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="pending_transaction_case.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Pending Transaction Case</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="transaction_case_log.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Transaction Case Log</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="#">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Transaction Rules</span>
                                </a>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="rule_configuration.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Rules Configuration</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="side_menu__item">
                        <a href="#">
                            <img src="../assets/images/Chart_alt.png" alt="../assets/images/Chart_alt.png">
                            <span>Customer Risk </span>
                        </a>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="#">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Customer Risk List</span>
                                </a>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer_risk/stakeholder_risk_list.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Stakeholder list</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer_risk/legal_entity_risk_list.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Legal Entity list</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer_risk/client_risk_list.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Client list</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="#">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Customer Risk Configuration</span>
                                </a>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer_risk/overall_risk_config.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Overall Risk Score Configuration</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../customer_risk/risk_element_config.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Risk Elements Configuration</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="../customer_risk/customer_risk_report.html">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Customer Risk Report</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="side_menu__item">
                        <a href="#">
                            <img src="../assets/images/case.png" alt="../assets/images/case.png">
                            <span>Case </span>
                        </a>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="../case/pending_case_list.html">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Pending Case List</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="../case/new_case.html">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>New Case</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="../case/close_case.html">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Closed Cases</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="../case/case_report.html">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Case Report</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="side_menu__item">
                        <a href="#">
                            <img src="../assets/images/screen.png" alt="../assets/images/screen.png">
                            <span>Sanction Screen</span>
                        </a>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="../sanction screen/new_screen.php">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>New Screen</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="../sanction screen/screen_log.html">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Screen Log</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="#">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Ongoing Screen</span>
                                </a>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../sanction screen/ongoing_screen_list.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Ongoing Screen List</span>
                                        </a>
                                    </li>

                                    <li class="grand_sub_side_menu__item">
                                        <a href="../sanction screen/ongoing_screen_configuration.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Ongoing Screen Configuration</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="side_menu__item">
                        <a href="#">
                            <img src="../assets/images/admin.png" alt="../assets/images/admin.png">
                            <span>Admin </span>
                        </a>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="#">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>User Management</span>
                                </a>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../admin/new_user.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>New User</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../admin/user_list.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>User list</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="#">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Group Management</span>
                                </a>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../admin/new_group.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>New Group</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../admin/group_list.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Group List</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="#">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Password</span>
                                </a>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../admin/password_chenge.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Password Change</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../admin/password_policy.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Password Expiry Limit</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="#">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Rights</span>
                                </a>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../admin/view_role.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>View Role</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../admin/role_configuration.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Role Configuration</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="#">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Modules Configuration</span>
                                </a>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../admin/logo_change.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Logo Change</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../admin/customer_module_config.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Customer Module Configuration</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../admin/transaction_module_config.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Transaction Module Configuration</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="side_menu__item">
                        <a href="#">
                            <img src="../assets/images/Bell_pin_fill.png" alt="../assets/images/Bell_pin_fill.png">
                            <span>Notification</span>
                        </a>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="#">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Notification Management</span>
                                </a>
                                <ul class="grand_sub_side_menu">
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../notification/emil_notification.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Email Notification</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../notification/in_App_notification.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>In-App Notification</span>
                                        </a>
                                    </li>
                                    <li class="grand_sub_side_menu__item">
                                        <a href="../notification/otp_notification.html">
                                            <img src="../assets/images/grand_submenu.png"
                                                alt="../assets/images/grand_submenu.png">
                                            <span>Mobile Notification (Whatsapp API)</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="side_menu__item">
                        <a href="../customer_import/customer_import_management.html">
                            <img src="../assets/images/User_add_alt_fill.png"
                                alt="../assets/images/User_add_alt_fill.png">
                            <span>Customer Import</span>
                        </a>
                    </li>
                    <li class="side_menu__item">
                        <a href="#">
                            <img src="../assets/images/Img_box_fill.png" alt="../assets/images/Img_box_fill.png">
                            <span>Front-End </span>
                        </a>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="../front_end/form_configuration.html">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Form Configuration</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="sub_side_menu">
                            <li class="sub_side_menu__item">
                                <a href="../front_end/confirmation_configuration.html">
                                    <img src="../assets/images/submenu.png" alt="../assets/images/submenu.png">
                                    <span>Confirmation Configuration</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="side_menu__item OPACITY">
                        <a href="../settings/app_settings.html">
                            <img src="../assets/images/Setting_line_duotone.png"
                                alt="../assets/images/Setting_line_duotone.png">
                            <span>App Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </section>
    <!-- end :: header -->
    <!-- start :: client_form  -->
    <section class="client_section add_new_legal_entity detail_section">
        <div class="container">
            <div class="row details_main">
                <div class="col-12">
                <form method="POST" enctype="multipart/form-data">
                    <div class="client_main_top">

                        <div class="client_top outbound_transaction_main">
                            <div class="Inner">
                                <a class="after_color inner_outbound" href="#"><img
                                        src="../assets/images/client_1_dark.png"
                                        alt="../assets/images/client_form_1.png"></a>
                                <span class="dark_color inner_span">Transaction Creation</span>
                            </div>
                            <div class="Inner">
                                <a class="inner_outbound" href="#"><img src="../assets/images/client_form_2.png"
                                        alt="../assets/images/client_form_2.png"></a>
                                <span class="inner_span">Transaction Verification</span>
                            </div>
                            <div class="Inner">
                                <a class="inner_outbound" href="#"><img src="../assets/images/client_3_light.png"
                                        alt="../assets/images/client_form_3.png"></a>
                                <span class=" inner_span">Transaction Validation</span>
                            </div>
                            <div class="Inner">
                                <a class="inner_outbound" href="#"><img src="../assets/images/client_4_light.png"
                                        alt="../assets/images/client_form_3.png"></a>
                                <span class=" inner_span">Transaction Approval</span>
                            </div>
                            <div class="Inner">
                                <a class="inner_outbound" href="#"><img src="../assets/images/client_5_light.png"
                                        alt="../assets/images/client_form_3.png"></a>
                                <span class=" inner_span">Transaction Call Back</span>
                            </div>
                        </div>
                        <div class="new_create_stakeholder">

                        </div>
                        <div class="company_info new_stakeholder">
                            <div class="outbound_main_top">
                                <div class="outbound_main_top__Inner">
                                    <a href="outbound_transaction_In_progress.html"><button>Exit</button></a>
                                    <a href="outbound_transaction_In_progress.html"><button>Save & Exit</button></a>
                                </div>
                                <div class="outbound_main_top__Inner__Inner">
                                    <p>Transaction Status </p>
                                    <span>:</span>
                                    <p>Draft</p>
                                </div>
                            </div>
                            <div class="company_logo">
                                <p>Client Information</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form_option">
                                        <p>Select Client </p>
                                        <a href="#"><img src="../assets/images/Search.png"
                                                alt="../assets/images/Search.png"></a>
                                        <select name="client" id="clientSelect">
                                            <option value="">Select Client </option>
                                            <!-- <option value="client1">Select client1 </option>
                                            <option value="client2">Select Client2 </option> -->
                                            <?php
                                            include '../db.php';
                                            $sel = "SELECT * FROM `client_data`";
                                            $run = mysqli_query($conn, $sel);
                                            while ($row = mysqli_fetch_array($run)) {
                                                ?>
                                                <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>Client type</p>
                                        <input type="text" placeholder="Client type" name="Client type" id="name_type">

                                      
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>Business Activity</p>
                                        <input type="text" placeholder="Business Activity" name="business_activity" id="business_activity">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p class="issue" style="margin-left: -17px;">Transaction Date</p>
                                        <input id="date" class="date" type="date" placeholder="12/12/2020" name="tra_date"
                                            style="margin-left: 4px;color: #5f5f5f;">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>Select Bank Name</p>
                                        <input type="text" placeholder="Select Bank Name" name="Select Bank Name" id="SelectBankName">

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>Select Bank Account Type </p>
                                        <input id="Banktype" type="text" placeholder="Select Bank Account Type" name="Select Bank Account Type">

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>Account Number</p>
                                        <input id="accountnumber" type="text" placeholder="Enter Account Number" name="account_number">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>IBAN</p>
                                        <input id="IBAN" type="text" placeholder="Enter IBAN" name="iban">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>Swift</p>
                                        <input id="Swift" type="text" placeholder="Enter Swift" name="swift">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>Client Risk Rating</p>
                                        <input id="ClientRiskRating" type="text" placeholder="Client Risk Rating" name="Client Risk Rating">

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_option">
                                        <p>Is Client Sanctioned?</p>
                                        <select name="sanctioned" id="#">
                                            <option value="shareholder_Active">Please select </option>
                                            <option value="yes">Yes </option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="company_info new_stakeholder">
                            <div class="company_logo">
                                <p>Beneficiary Information</p>
                            </div>
                            <div class="row">
                            <div class="col-lg-6">
                                    <div class="form_option">
                                        <p>Is Existing or New Beneficiary?</p>
                                        <select name="beneficiary_1" id="#">
                                            <option value="beneficiary_1">Please select </option>
                                            <option value="beneficiary_1">Existing </option>
                                            <option value="beneficiary_1">New</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_option">
                                        <p>Select or Enter Beneficiary </p>
                                        <a href="#"><img src="../assets/images/Search.png"
                                                alt="../assets/images/Search.png"></a>
                                        <select name="beneficiary2" id="#">
                                        <option value="beneficiary2">Select or Enter Beneficiary</option>
                                            <option value="beneficiary2">Select or Enter Beneficiary1 </option>
                                            <option value="beneficiary2">Select or Enter Beneficiary2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="company_form">
                                        <p>Address 1</p>
                                        <input type="text" placeholder="Enter Address" name="address_1">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>Enter City</p>
                                        <input type="text" placeholder="City Name" name="city">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>Enter Pin Code</p>
                                        <input type="text" placeholder="Pin Code" name="pin_code">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>Country </p>
                                       
                                                <input id="Country" type="text" placeholder="Country" name="Country">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>Currency </p>
                                        <input id="Currency" type="text" placeholder="Currency $" name="currency_1">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_option">
                                        <p>Select Bank Account Type </p>
                                        <select name="account_type" id="#">
                                            <option value="account_type">Select Bank Account Type </option>
                                            <option value="account_type">Select Bank Account Type </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>Enter Bank Name</p>
                                        <input type="text" placeholder="Enter Bank Name" name="bank_name1">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                               
                                    <div class="company_form">
                                        <p>Account Number</p>
                                        <input id="accountnumber" type="text" placeholder="Enter Account Number" name="account_number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>IBAN</p>
                                        <input type="text" placeholder="Enter IBAN" name="iban1">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>Swift</p>
                                        <input type="text" placeholder="Enter Swift" name="swift1">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a class="save_beneficiary" href="#">
                                         <!-- style="opacity: 0.5;"> -->
                                        <!-- <button>Save Beneficiary</button> -->
                                        <button type="save" name="save_btn">Save Beneficiary</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="company_info new_stakeholder">
                            <div class="company_logo">
                                <p>Transaction Details</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>Purpose of Transaction</p>
                                        <input type="text" placeholder="Purpose of Transaction" name="purpose_tra">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_option">
                                        <p>Is payment in line with Business Plan?</p>
                                        <select name="business_plan" id="#">
                                            <option value="business_plan">Please select </option>
                                            <option value="business_plan">Yes </option>
                                            <option value="business_plan">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_option">
                                        <p>Is the country of destination a high-risk jurisdiction?</p>
                                        <select name="jurisdiction" id="#">
                                            <option value="jurisdiction">Please select </option>
                                            <option value="jurisdiction">Yes </option>
                                            <option value="jurisdiction">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_option">
                                        <p>Country of Destination </p>
                                        <a href="#"><img src="../assets/images/Search.png"
                                                alt="../assets/images/Search.png"></a>
                                                <select name="country_destination" id="#">
                                        <option value="">Plase Select</option>
                                        <?php
                                        include '../db.php';
                                        $sel = "SELECT * FROM `all_country` WHERE 1";
                                        $run = mysqli_query($conn, $sel);
                                        while ($row = mysqli_fetch_array($run)) {
                                            ?>
                                            <option value="<?php echo $row['country'] ?>"><?php echo $row['country'] ?></option>
                                            <?php
                                        }
                                        ?>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>Amount</p>
                                        <input type="text" placeholder="Amount" name="amount">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="company_form">
                                        <p>Exchange rate</p>
                                        <input type="text" placeholder="Exchange rate" name="exchange_rate">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_option">
                                        <p>Transaction Risk </p>
                                        <select name="tra_risk" id="#">
                                            <option value="tra_risk">Transaction Risk </option>
                                            <option value="tra_risk">Transaction Risk </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_option">
                                        <p>Sufficient Fund in Back Account?</p>
                                        <select name="fund_bank_account" id="#">
                                            <option value="fund_bank_account">Please select </option>
                                            <option value="fund_bank_account">Yes </option>
                                            <option value="fund_bank_account">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="company_form">
                                        <p>Notes</p>
                                        <input type="text" placeholder="Notes / Details" name="notes_1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="company_info new_stakeholder">
                            <div class="company_logo">
                                <p>Client Verification</p>
                            </div>
                            <div class="row">
                            <div class="col-lg-6">
                                    <div class="form_option">
                                    <p style="font-size: 13.5px;">Transfer instruction received from authorized person on call back?</p>
                                        <select name="call_back1" id="#">
                                            <option value="call_back1">Please select </option>
                                            <option value="call_back1">Yes </option>
                                            <option value="call_back1">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_option">
                                        <p>Any changes in list of authorized persons or is first call back?</p>
                                        <select name="authorized" id="#">
                                            <option value="authorized">Please select </option>
                                            <option value="authorized">Yes </option>
                                            <option value="authorized">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="company_form">
                                        <p>Please provide Details</p>
                                        <input type="text" placeholder="Enter Details" name="detail1">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="company_form">
                                        <p>email</p>
                                        <input id="email" type="text" placeholder="email" name="detail1">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_option">
                                        <p>Any changes in the details of the authorized person?</p>
                                        <select name="changes" id="#">
                                            <option value="changes">Please select </option>
                                            <option value="changes">Yes </option>
                                            <option value="changes">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="company_form">
                                        <p>Please provide Details</p>
                                        <input type="text" placeholder="Enter Details" name="detail2">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_option">
                                        <p style="font-size: 12.5px;">Has there been changes in bank signatories or bank details of client?</p>
                                        <select name="signatories" id="#">
                                            <option value="signatories">Please select </option>
                                            <option value="signatories">Yes </option>
                                            <option value="signatories">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="company_form">
                                        <p>Please Provide Details</p>
                                        <input type="text" placeholder="Enter Details" name="detail3">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_option">
                                        <p>Is the transaction in line with the business activity of the company?</p>
                                        <select name="activity" id="#">
                                            <option value="activity">Please select </option>
                                            <option value="activity">Yes </option>
                                            <option value="activity">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="company_form">
                                        <p>Please provide Details</p>
                                        <input type="text" placeholder="Enter Details" name="detail4">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="company_info new_stakeholder">
                        <div class="company_logo">
                            <p>Beneficiary Verification</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                    <div class="form_option">
                                        <p>Is the transaction a recurrent one? </p>
                                        <select name="recurrent" id="#">
                                            <option value="recurrent">Please select </option>
                                            <option value="recurrent">Yes </option>
                                            <option value="recurrent">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_option">
                                        <p>If recurrent, has ongoing screening box been ticked in respect to world check</p>
                                        <select name="screening" id="#">
                                        <option value="screening">Please select </option>
                                            <option value="screening">Yes </option>
                                            <option value="screening">No</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="col-lg-12">
                                    <div class="form_option">
                                        <p>If recurrent, Any changes in banking details of beneficiary? </p>
                                        <select name="beneficiary" id="#">
                                            <option value="beneficiary">Please select </option>
                                            <option value="beneficiary">Yes </option>
                                            <option value="beneficiary">No</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="col-lg-12">
                                    <div class="form_option">
                                        <p>If purpose of payment is redemption, is banking details of the
                                        beneficiary same as on the subscription form? </p>
                                        <select name="payment" id="#">
                                            <option value="payment">Please select </option>
                                            <option value="payment">Yes </option>
                                            <option value="payment">No</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="col-lg-12">
                                    <div class="form_option">
                                        <p>Any beneficiary details and KYC documents available on record?</p>
                                        <select name="KYC" id="#">
                                            <option value="KYC">Please select </option>
                                            <option value="KYC">Yes </option>
                                            <option value="KYC">no</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="col-12">
                                <div class="company_form">
                                    <p>Please provide Details</p>
                                    <input type="text" placeholder="Enter Details" name="detail5">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                    <div class="form_option">
                                        <p>Have the following been performed on the beneficiary and saved?</p>
                                        <select name="performed" id="#">
                                            <option value="performed">Please select </option>
                                            <option value="performed">Yes </option>
                                            <option value="performed">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form_option">
                                        <p>Transaction Type</p>
                                        <select name="social_verification" id="#">
                                        <option value="">Plase Select</option>
                                        <?php
                                        include '../db.php';
                                        $sel = "SELECT * FROM `social_transaction` WHERE 1";
                                        $run = mysqli_query($conn, $sel);
                                        while ($row = mysqli_fetch_array($run)) {
                                            ?>
                                            <option value="<?php echo $row['tra_type'] ?>"><?php echo $row['tra_type'] ?></option>
                                            <?php
                                        }
                                        ?>
                                            </select>
                                    </div>
                                </div>

                            <div class="col-6">
                                <div class="company_form">
                                    <p>For all adverse media, Please provide details</p>
                                    <input type="text" placeholder="Details" name="adverse_media">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="company_info new_stakeholder">
                        <div class="company_logo">
                            <p>Supporting Documents</p>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="company_form">
                                    <p>Upload Document</p>
                                    <input type="text" placeholder="Invoice Upload">
                                    <div class="yes_main">
                                        <div class="yes">
                                            <input type="file" name="doc1" >
                                            <label for="upload_img"><img class="img_lable"
                                                    src="../assets/images/Paper Upload.png"
                                                    alt="../assets/images/Paper Upload.png"></label>
                                        </div>
                                        <div class="yes_no">
                                            <input type="file">
                                            <label for="upload_img"><img class="img_lable"
                                                    src="../assets/images/Close Square.png"
                                                    alt="../assets/images/Close Square.png"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="company_form">
                                    <p>Upload Document</p>
                                    <input type="text" placeholder="Agreement">
                                    <div class="yes_main">
                                        <div class="yes">
                                            <input type="file" name="doc2">
                                            <label for="upload_img"><img class="img_lable"
                                                    src="../assets/images/Paper Upload.png"
                                                    alt="../assets/images/Paper Upload.png"></label>
                                        </div>
                                        <div class="yes_no">
                                            <input type="file">
                                            <label for="upload_img"><img class="img_lable"
                                                    src="../assets/images/Close Square.png"
                                                    alt="../assets/images/Close Square.png"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="company_form">
                                    <p>Upload Document</p>
                                    <input type="text" placeholder="Email">
                                    <div class="yes_main">
                                        <div class="yes">
                                            <input type="file"  name="doc3">
                                            <label for="upload_img"><img class="img_lable"
                                                    src="../assets/images/Paper Upload.png"
                                                    alt="../assets/images/Paper Upload.png"></label>
                                        </div>
                                        <div class="yes_no">
                                            <input type="file">
                                            <label for="upload_img"><img class="img_lable"
                                                    src="../assets/images/Close Square.png"
                                                    alt="../assets/images/Close Square.png"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-">
                                <div class="company_form">
                                    <p>Upload Document</p>
                                    <input type="text" placeholder="Resolution / Minutes">
                                    <div class="yes_main">
                                        <div class="yes">
                                            <input type="file"  name="doc4">
                                            <label for="upload_img"><img class="img_lable"
                                                    src="../assets/images/Paper Upload.png"
                                                    alt="../assets/images/Paper Upload.png"></label>
                                        </div>
                                        <div class="yes_no">
                                            <input type="file">
                                            <label for="upload_img"><img class="img_lable"
                                                    src="../assets/images/Close Square.png"
                                                    alt="../assets/images/Close Square.png"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="company_form">
                                    <p>Upload Document</p>
                                    <input type="text" placeholder="Others">
                                    <div class="yes_main">
                                        <div class="yes">
                                            <input type="file" name="doc5">
                                            <label for="upload_img"><img class="img_lable"
                                                    src="../assets/images/Paper Upload.png"
                                                    alt="../assets/images/Paper Upload.png"></label>
                                        </div>
                                        <div class="yes_no">
                                            <input type="file">
                                            <label for="upload_img"><img class="img_178lable"
                                                    src="../assets/images/Close Square.png"
                                                    alt="../assets/images/Close Square.png"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="company_info new_stakeholder">
                        <div class="company_logo">
                            <p>Bank Signatories </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form_option">
<p>Bank Signatory 1</p>
                            <select name="Bank Signatory 1" id="#">
                            <option value="Ruts">Ruts</option>
                            <option value="Ruts">Ruts</option>
                            </select>
<!-- <input id="BankSignatory1" type="text" placeholder="Bank Signatory 1" name="Bank Signatory 1"> -->
</div>
                                
 </div>
<div class="col-lg-6">
<div class="form_option">
<p>Bank Signatory2 </p>
<select name="Bank Signatory2" id="#">
    <option value="Bank Signatory2">Bank Signatory2</option>
    <option value="Bank Signatory2">Bank Signatory2</option>
</select>
<!-- <input id="BankSignatory2" type="text" placeholder="Bank Signatory 2" name="Bank Signatory "> -->
</div>
                        </div>
                    </div>
                    <div class="company_info new_stakeholder">
                        <div class="company_logo">
                            <p>First Call Back</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="company_form" id="oct_hide">
                                    <p>Enter your company name*</p>
                                    <input type="text" placeholder="company name" name="cmp_name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="company_form" id="oct_hide">
                                    <p>Enter Company number</p>
                                    <input type="text" placeholder="Company number" name="cmp_number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="company_form" id="oct_hide">
                                    <p>Call Back No</p>
                                    <input type="Number" placeholder="Call Back No" name="call_back_num">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_option" id="oct_hide">
                                    <p>Call Back*</p>
                                    <select name="call_back" id="#">
                                        <option value="call_back_1">Done</option>
                                        <option value="call_back_2">Failed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="company_form" id="oct_hide">
                                    <p>Call Back Time</p>
                                    <input type="time" placeholder="Call Back Time" name="call_back_time" value="time">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="company_form" id="oct_hide">
                                    <p>Call Back Date</p>
                                    <input type="Date" placeholder="Call Back Date" name="call_back_date" value="date">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="company_form" id="oct_hide">
                                    <p>Call Back Time Retry (if failed)</p>
                                    <input type="time" placeholder="Call Back Time" name="call_back_time1" value="time">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="company_form" id="oct_hide">
                                    <p>BRN</p>
                                    <input type="text" placeholder="Enter BRN" name="brn">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="company_info new_stakeholder">
                        <div class="company_logo">
                            <p>Validation and Submission </p>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="company_form">
                                    <p>Notes</p>
                                    <textarea name="notes_2" id="Link" cols="30" rows="2"
                                        placeholder="Notes /  Details"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="detail_customer_bottom OPACITY">
                                    <div class="select sign_upload">
                                        <div class="option">
                                            <p>Upload Digital Signature </p>
                                            <input type="text" placeholder="Upload Digital Signature" name="digital_signature">
                                            <div class="yes_main">
                                                <div class="yes">
                                                    <input type="file" name="digital_signature">
                                                    <label for="upload_img"><img class="img_lable"
                                                            src="../assets/images/Paper Upload.png"
                                                            alt="../assets/images/Paper Upload.png"></label>
                                                </div>
                                                <div class="yes_no">
                                                    <input type="file">
                                                    <label for="upload_img"><img class="img_lable"
                                                            src="../assets/images/Close Square.png"
                                                            alt="../assets/images/Close Square.png"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_option">
                                    <p>Select Call back Officer</p>
                                    <select name="call_back_officer_1" id="#">
                                        <option value="call_back_officer_1">Call Back Officer</option>
                                        <option value="call_back_officer_1">Call Back Officer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="company_form">
                                    <p>Select Reviewer</p>
                                    <input id="SelectReviewer" type="text" placeholder="Select Reviewer" name="compliance_executive">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="company_form">
                                    <p>Select Compliance executive</p>
                                    <input id="executive" type="text" placeholder="Compliance executive" name="compliance_executive">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="company_form">
                                    <p> Select Approver</p>
                                    <input id="SelectApprover" type="text" placeholder="Please Select Your Approver" name="compliance_executive">
                                </div>
                            <div class="company_info form_info NEW_C_STAKEHOLDER">
                                <div class="client_bottom">
                            <div class="client_bottom_a">
                                <div class="client_bottom_a__inner">
                                    <a class="clear" href="outbound_draft_transaction.php">Save</a>
                                </div>
                            </div>
                            <div class="client_bottom_a">
                                <div class="client_bottom_a__inner">
                                    <a class="save" href="#">Save as Recurrence Transaction</a>
                                </div>
                            </div>
                            <div class="client_bottom_a">
                                <div class="client_bottom_a__inner">
                                    <a href="outbound_draft_transaction.php"><input type="submit"  name="submit_btn"></a>
                                </div>
                            </div>
                      
                        </div>
                    </div>
                </div>

        <?php
        function storeFileWithDateTime($file, $folderName)
        {
            if (!is_array($file) || $file['error'] !== UPLOAD_ERR_OK) {
                return false;
            }

            $mainDirectory = 'transaction_doc';
            if (!file_exists($mainDirectory)) {
                mkdir($mainDirectory, 0777, true);
            }

            $folderPath = $mainDirectory . '/' . $folderName;
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);
            }

            $currentDateTime = date('Ymd_His');

            $originalFileName = basename($file['name']);
            $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
            $newFileName = $currentDateTime . '.' . $fileExtension;
            $filePath = $folderPath . '/' . $newFileName;
            echo $filePath;
            // exit;
            if (move_uploaded_file($file['tmp_name'], $filePath)) {
                // echo $filePath;
                // exit;
                return $filePath;
            } else {
                return false;
            }
        }

        include '../db.php';
        if (isset($_POST['submit_btn']) || isset($_POST['save_btn'])) {
            //   $data = $_SESSION['data'];
            $client = $_POST['client'];
            $client_type = $_POST['client_type'];
            $business_activity = $_POST['business_activity'];
            $tra_date = $_POST['tra_date'];
            $bank_name = $_POST['bank_name'];
            $bank_ac_type = $_POST['bank_ac_type'];
            $account_number = $_POST['account_number'];
            $iban = $_POST['iban'];
            $swift = $_POST['swift'];
            $client_risk_rate = $_POST['client_risk_rate'];
            $sanctioned = $_POST['sanctioned'];
            $beneficiary_1 = $_POST['beneficiary_1'];
            $beneficiary2 = $_POST['beneficiary2'];
            $address_1 = $_POST['address_1'];
            $city = $_POST['city'];
            $pin_code = $_POST['pin_code'];
            $country_1 = $_POST['country_1'];
            $currency_1 = $_POST['currency_1'];
            $account_type = $_POST['account_type'];
            $bank_name1 = $_POST['bank_name1'];
            $account_num1 = $_POST['account_num1'];
            $iban1 = $_POST['iban1'];
            $swift1 = $_POST['swift1'];
            $purpose_tra = $_POST['purpose_tra'];
            $business_plan = $_POST['business_plan'];
            $jurisdiction = $_POST['jurisdiction'];
            $country_destination = $_POST['country_destination'];
            $amount = $_POST['amount'];
            $exchange_rate = $_POST['exchange_rate'];
            $tra_risk = $_POST['tra_risk'];
            $fund_bank_account = $_POST['fund_bank_account'];
            $notes_1 = $_POST['notes_1'];
            $call_back1 = $_POST['call_back1'];
            $authorized = $_POST['authorized'];
            $detail1 = $_POST['detail1'];
            $mandate = $_POST['mandate'];
            $changes = $_POST['changes'];
            $detail2 = $_POST['detail2'];
            $signatories = $_POST['signatories'];
            $detail3 = $_POST['detail3'];
            $activity = $_POST['activity'];
            $detail4 = $_POST['detail4'];
            $recurrent = $_POST['recurrent'];
            $screening = $_POST['screening'];
            $beneficiary = $_POST['beneficiary'];
            $payment = $_POST['payment'];
            $KYC = $_POST['KYC'];
            $detail5 = $_POST['detail5'];
            $KYC = $_POST['KYC'];
            $performed = $_POST['performed'];
            $social_verification = $_POST['social_verification'];
            $adverse_media = $_POST['adverse_media'];


            $doc1 = $_FILES['doc1'];
            $uploadPass = storeFileWithDateTime($doc1, "tra_doc1");

            $doc2 = $_FILES['doc2'];
            $uploadPass2 = storeFileWithDateTime($doc2, "tra_doc2");


            $doc3 = $_FILES['doc3'];
            $uploadPass3 = storeFileWithDateTime($doc3, "tra_doc3");


            $doc4 = $_FILES['doc4'];
            $uploadPass4 = storeFileWithDateTime($doc4, "tra_doc4");

            $doc5 = $_FILES['doc5'];
            $uploadPass5 = storeFileWithDateTime($doc5, "tra_doc5");

            $bank_signatory1 = $_POST['bank_signatory1'];   
            $bank_signatory2 = $_POST['bank_signatory2'];
            $cmp_name = $_POST['cmp_name'];
            $cmp_number = $_POST['cmp_number'];
            $call_back_num = $_POST['call_back_num'];
            $call_back = $_POST['call_back'];
            $call_back_time = $_POST['call_back_time'];
            $call_back_date = $_POST['call_back_date'];
            $call_back_time1 = $_POST['call_back_time1'];
            $brn = $_POST['brn'];
            $notes_2 = $_POST['notes_2'];

            $digital_signature = $_FILES['digital_signature']['name'];
            $digital_signature_tmp = $_FILES['digital_signature']['tmp_name'];
            $folder_up_1 = "transaction_doc/" . $digital_signature;
            move_uploaded_file($digital_signature_tmp, $folder_up_1);

            $call_back_officer_1 = $_POST['call_back_officer_1'];
            $reviewer = $_POST['reviewer'];
            $compliance_executive = $_POST['compliance_executive'];
            $approver = $_POST['approver'];

            if (isset($_POST['submit_btn'])) {

                $insert = "INSERT INTO `creat_transaction`(`client`,`client_type`,`business_activity`,`tra_date`,`bank_name`,`bank_ac_type`,
            `account_number`,`iban`,`swift`,`client_risk_rate`, `sanctioned`,`beneficiary_1`, `beneficiary2`,`address_1`,`city`,`pin_code`, 
            `country_1`,`currency_1`,`account_type`,`bank_name1`,`account_num1`,`iban1`,`swift1`,`purpose_tra`,`business_plan`, `jurisdiction`,
            `country_destination`,`amount`,`exchange_rate`,`tra_risk`,`fund_bank_account`,`notes_1`,`call_back1`,`authorized`,`detail1`,
            `mandate`,`changes`,`detail2`,`signatories`,`detail3`,`activity`,`detail4`,`recurrent`,`screening`, `beneficiary`,`payment`,`KYC`,
            `detail5`,`performed`,`social_verification`,`adverse_media`,`doc1`,`doc2`,`doc3`,`doc4`,`doc5`,`bank_signatory1`,`bank_signatory2`,
            `cmp_name`,`cmp_number`,`call_back_num`,`call_back`,`call_back_time`,`call_back_date`,`call_back_time1`,`brn`,`notes_2`,
            `digital_signature`,`call_back_officer_1`,`reviewer`,`compliance_executive`,`approver`,`date`) 
            
            VALUES('$client','$client_type','$business_activity','$tra_date','$bank_name','$bank_ac_type','$account_number','$iban','$swift',
            '$client_risk_rate','$sanctioned','$beneficiary_1','$beneficiary2','$address_1','$city','$pin_code','$country_1','$currency_1',
            '$account_type','$bank_name1','$account_num1','$iban1','$swift1','$purpose_tra','$business_plan','$jurisdiction',
            '$country_destination','$amount','$exchange_rate','$tra_risk','$fund_bank_account','$notes_1','$call_back1','$authorized',
            '$detail1','$mandate','$changes','$detail2','$signatories','$detail3','$activity','$detail4','$recurrent','$screening',
            '$beneficiary','$payment','$KYC','$detail5','$performed','$social_verification','$adverse_media','$uploadPass','$uploadPass2','$uploadPass3','$uploadPass4','$uploadPass5','$bank_signatory1',
            '$bank_signatory2','$cmp_name','$cmp_number','$call_back_num','$call_back','$call_back_time','$call_back_date','$call_back_time1',
            '$brn','$notes_2','$digital_signature','$call_back_officer_1','$reviewer','$compliance_executive','$approver','NOW()')";

                $res = mysqli_query($conn, $insert);
                if ($res) {
                    echo "<script>
                    location.href='outbound_draft_transaction.php';
                    </script>";
                } else {
                    echo "<script>
                    alert('opps data not inserted');
                    </script>";
                }
            }

            if (isset($_POST['save_btn'])) {

                $insert = "INSERT INTO `creat_transaction`(`client`,`client_type`,`business_activity`,`tra_date`,`bank_name`,`bank_ac_type`,
                `account_number`,`iban`,`swift`,`client_risk_rate`, `sanctioned`,`beneficiary_1`, `beneficiary2`,`address_1`,`city`,`pin_code`, 
                `country_1`,`currency_1`,`account_type`,`bank_name1`,`account_num1`,`iban1`,`swift1`,`purpose_tra`,`business_plan`, `jurisdiction`,
                `country_destination`,`amount`,`exchange_rate`,`tra_risk`,`fund_bank_account`,`notes_1`,`call_back1`,`authorized`,`detail1`,
                `mandate`,`changes`,`detail2`,`signatories`,`detail3`,`activity`,`detail4`,`recurrent`,`screening`, `beneficiary`,`payment`,
                `KYC`,`detail5`,`performed`,`social_verification`,`adverse_media`,`doc1`,`doc2`,`doc3`,`doc4`,`doc5`,`bank_signatory1`,
                `bank_signatory2`,`cmp_name`,`cmp_number`,`call_back_num`,`call_back`,`call_back_time`,`call_back_date`,`call_back_time1`,`brn`,
                `notes_2`,`digital_signature`,`call_back_officer_1`,`reviewer`,`compliance_executive`,`approver`,`date`) 
                
                VALUES('$client','$client_type','$business_activity','$tra_date','$bank_name','$bank_ac_type','$account_number','$iban',
                '$swift','$client_risk_rate','$sanctioned','$beneficiary_1','$beneficiary2','$address_1','$city','$pin_code','$country_1',
                '$currency_1','$account_type','$bank_name1','$account_num1','$iban1','$swift1','$purpose_tra','$business_plan','$jurisdiction',
                '$country_destination','$amount','$exchange_rate','$tra_risk','$fund_bank_account','$notes_1','$call_back1',
                '$authorized','$detail1','$mandate','$changes','$detail2','$signatories','$detail3','$activity','$detail4','$recurrent',
                '$screening','$beneficiary','$payment','$KYC','$detail5','$performed','$social_verification','$adverse_media','$uploadPass',
                '$uploadPass2','$uploadPass3','$uploadPass4','$uploadPass5','$bank_signatory1','$bank_signatory2','$cmp_name','$cmp_number',
                '$call_back_num','$call_back','$call_back_time','$call_back_date','$call_back_time1','$brn','$notes_2','$digital_signature',
                '$call_back_officer_1','$reviewer','$compliance_executive','$approver','NOW()')";

                $res = mysqli_query($conn, $insert);

                if ($res) {
                    echo "<script>
                    location.href='outbound_draft_transaction.php';
                    </script>";
                } else {
                    echo "<script>
                    alert('opps data not inserted');
                    </script>";
                }
            }
        }
        ?>
</div>
</form>
</div>
</div>
</section>
<!-- end :: client_form  -->
<!-- start :: bootstrap jquery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!-- end :: bootstrap jquery -->
    <!-- start :: jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- end :: jquery cdn -->
    <!-- start :: custom jquery -->
    <script src="../assets/js/script.js"></script>
    <!-- end :: custom jquery -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Wait for the document to be ready
    $(document).ready(function () {
        // Add event listener to all file input elements
        $('input[type="file"]').on('change', function () {
            // Get the filename
            const fileName = $(this).val().split('\\').pop();

            // Get the corresponding input text element and set its value to the filename
            const inputText = $(this).closest('.company_form').find('input[type="text"]').val(fileName);

            // Display the success message
            $('#success_message').text('Upload successful! File: ' + fileName);
        });
    });
    </script>
    <script>
$(document).ready(function() {
    // Attach an event listener to the dropdown
    $("#clientSelect").on("change", function() {
        var selectedOption = $(this).val(); // Get the selected option's value
        console.log(selectedOption)
        // Make an API call using the selected option value
        $.ajax({
            url: "http://localhost/maurious/admin/create_transactionapi.php?client="+selectedOption, // Replace with your API endpoint
            method: "GET", // Use the appropriate HTTP method
            data: { option: selectedOption }, // Pass any data to the API if needed
            success: function(response) {
                // Handle the API response here
                
                var result = response?.data[0];
                var name_type = result?.name_type
                var business_activity = result?.bussiness_activity
                var SelectBankName = result?.Source_of_funds_Bank
                var date = result?.date_of_incorporation
                var Banktype = result?.Account_type
                var accountnumber = result?.Enter_Account_Number
                var IBAN = result?.Enter_IBAN
                var Swift = result?.Enter_Swift_Cod
                var Country = result?.enter_country 
                var Currency = result?.Currency
                var BankSignatory1 = result?.add_bank_signatory
                var email  = result?.email
                var executive  = result?.select_complaince_exicutive
                var SelectApprover  = result?.select_appover 
                var SelectReviewer  = result?.select_reviewer                                          	     
                console.log(Country);
                $("#name_type").val(name_type);
                $("#business_activity").val(business_activity);
                $("#SelectBankName").val(SelectBankName);
                $("#date").val(date);
                $("#Banktype").val(Banktype);
                $("#accountnumber").val(accountnumber);
                $("#IBAN").val(IBAN);
                $("#Swift").val(Swift);
                $("#Country").val(Country);
                $("#Currency").val(Currency);
                $("#BankSignatory1").val(BankSignatory1);
                $("#email").val(email);
                $("#executive").val(executive);
                $("#SelectApprover").val(SelectApprover);
                $("#SelectReviewer").val(SelectReviewer);
                console.log(result);
            },
            error: function(error) {
                console.error("API call error:", error);
            }
        });
    });
});
</script>
</body>

</html>
