<?php

/** Interfaces create `blueprints`, or sets of rules for classes to adhere to */

interface PaymentInterface {
  public function paymentProcess();
}
interface LoginInterface {
  public function loginFirst();
}


class Paypal implements PaymentInterface, LoginInterface {
  public function loginFirst() {}
  public function payNow() {}
  public function paymentProcess() {
    $this->loginFirst();
    $this->payNow();
  }
}

class BankTransfer implements PaymentInterface, LoginInterface {
  public function loginFirst() {}
  public function payNow() {}
  public function paymentProcess() {
    $this->loginFirst();
    $this->payNow();
  }
}

class Visa implements PaymentInterface {
  public function payNow() {}
  public function paymentProcess() {
    $this->payNow();
  }
}

class Cash implements PaymentInterface {
  public function payNow() {}
  public function paymentProcess() {
    $this->payNow();
  }
}

class BuyProduct {
  public function pay(PaymentInterface $paymentType) {
    $paymentType -> paymentProcess();
  }
}

// $paymentType = new Paypal();
// $buyProduct = new BuyProduct();

// $buyProduct -> pay($paymentType);