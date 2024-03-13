## What is an Object

If you look at the world around you, you’ll find many examples of tangible objects: lamps, phones, computers, and cars. Also, you can find intangible objects such as bank accounts and transactions.

All of these objects share the two common key characteristics:

- State
- Behavior

For example, a bank account has the state that consists of:

- Account number
- Balance

A bank account also has the following behaviors:

- Deposit
- Withdraw

PHP objects are conceptually similar to real-world objects because they consist of state and behavior.

An object holds its state in variables that are often referred to as properties. An object also exposes its behavior via functions which are known as methods.

## What is a class?
In the real world, you can find many same kinds of objects. For example, a bank has many bank accounts. All of them have account numbers and balances.

These bank accounts are created from the same blueprint. In object-oriented terms, we say that an individual bank account is an instance of a Bank Account class.

By definition, a class is the blueprint of objects. For example, from the Bank Account class, you can create many bank account objects.

The following illustrates the relationship between the BankAccount class and its objects. From the BankAccount class you can create many BankAccount objects. And each object has its own account number and balance.

![php objects](images/PHP-Objects.png)