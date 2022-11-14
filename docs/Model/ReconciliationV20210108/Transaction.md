## Transaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_id** | **string** | The identifier of the marketplace where the item was bought. | [optional]
**transaction_date** | **string** | The date when the transaction occurred. | [optional]
**feed_date** | **string** | The date after which you can successfully query the transaction with the getTransactions operation. | [optional]
**transaction_type** | **string** | The type of transaction. | [optional]
**transaction_id** | **string** | The identifier for this transaction. | [optional]
**ship_tax_rate** | **string** | The shipping tax rate for a transaction. | [optional]
**gift_wrap_tax_rate** | **string** | The gift wrap tax rate for a transaction. | [optional]
**legal_entity_name** | **string** | The name of the Business Legal Entity on behalf of which the order was placed. | [optional]
**purchasing_customer_group_name** | **string** | The name of the department under the Legal Entity on behalf of which the order was placed | [optional]
**amount** | [**\AmazonBusinessApi\Model\ReconciliationV20210108\Money**](Money.md) |  | [optional]
**payment_instrument_type** | **string** | The type of payment instrument, such as a credit card, pay by invoice, a bank account, a reward account, etc. | [optional]
**payment_instrument_last4_digits** | **string** | The last 4 digits of the payment instrument number. | [optional]
**buyer** | [**\AmazonBusinessApi\Model\ReconciliationV20210108\Customer**](Customer.md) |  | [optional]
**payer** | [**\AmazonBusinessApi\Model\ReconciliationV20210108\Customer**](Customer.md) |  | [optional]
**associated_transaction_details** | [**\AmazonBusinessApi\Model\ReconciliationV20210108\AssociatedTransactionDetail[]**](AssociatedTransactionDetail.md) | A list of transaction details that are associated with this transaction. For example, if a payment is made with three different transactions (each using a different payment instrument), this list will contain associatedTransactionId values for the two other transactions associated with this transaction. | [optional]
**transaction_line_items** | [**\AmazonBusinessApi\Model\ReconciliationV20210108\TransactionLineItem[]**](TransactionLineItem.md) | A list of transaction line items. | [optional]

[[ReconciliationV20210108 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
