# Francisco Javier Olvera Martínez - 2º de ASIR - Marzo 2018. Task for IAW - Unit 06

## Implementation of PHP scripts in a warehouse control website where to register, unsubscribe and show the stored registers in a MySql database of a computers shop.

### About code implementation.

### Menu bar

A top menu to access the three main web pages:
    
      * **_Register_** - To store new data
      * **_Query_** - To show all the registers
      * **_Unsubscribe_** - To unsubscribe a particular register

#### Query.html

A simple **_html_** page where is shown, in a table format, all the record of de database, sorted by Reference number, who is the **_prymary key_** of the database table **_computers_**

  Each register row consists in four fields:
    
    * Trademark
    * Model
    * Reference
    * Stock (this is actually used to store the repair state as boolean Yes/No )

The **_php_** code do a query and shows a ordered table filled with the data of all the records stored in the database.
