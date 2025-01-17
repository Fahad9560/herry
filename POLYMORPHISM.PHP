<?php
class BankAccount {
    // Private property
    private $balance;

    // Constructor to initialize balance
    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }

    // Public method to deposit money
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: $amount\n";
        } else {
            echo "Deposit amount must be positive.\n";
        }
    }

    // Public method to withdraw money
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrew: $amount\n";
        } else {
            echo "Invalid withdrawal amount.\n";
        }
    }

    // Public method to check balance
    public function getBalance() {
        return $this->balance;
    }
}

// Creating an instance of BankAccount
$account = new BankAccount(1000);

// Performing operations
$account->deposit(500); // Deposited: 500
$account->withdraw(200); // Withdrew: 200
echo "Current Balance: " . $account->getBalance() . "\n"; // Current Balance: 1300

// Attempting to access the private property directly (will cause an error)
// echo $account->balance; // Uncommenting this line will cause a fatal error
?>