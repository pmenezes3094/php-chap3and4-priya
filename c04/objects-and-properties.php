<?php
class Customer
{
    public string $forename;
    public string $surname;
    public string $email;
    public string $password;
}

class Account
{
    public int    $number;
    public string $type;
    public float  $balance;
}

$customer = new Customer();
$account  = new Account();
$customer->email  = 'ivy@eg.link';
$customer->forename  = 'Deli';
$customer->surname  = 'Mezia';
$account->balance = 1000.00;
?>
<?php include 'includes/header.php'; ?>
<p>Email: <?= $customer->forename ?></p>
<p>Email: <?= $customer->surname ?></p>
  <p>Email: <?= $customer->email ?></p>
  <p>Balance: $<?= $account->balance ?></p>
<?php include 'includes/footer.php'; ?>