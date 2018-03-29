# Francisco Javier Olvera Martínez - 2º de ASIR - Marzo 2018. Task for IAW - Unit 06

## Implementation of PHP scripts in a warehouse control website where to register, unsubscribe and show the stored registers in a MySql database of a computers shop.

### About code implementation.

### Menu bar

A top menu to access the three main web pages:
    
   * **_Register_** - To store new data
   * **_Query_** - To show all the register
   * **_Unsubscribe_** - To unsubscribe a particular register

#### query.php

A simple **_html_** page where is shown, in a table format, all the record of de database, sorted by Reference number, who is the **_prymary key_** of the database table **_computers_**

  Each register row consists in four fields:
    
    * Trademark
    * Model
    * Reference
    * Stock (this is actually used to store the repair state as boolean Yes/No )

The **_php_** code do a query and shows a ordered table filled with the data of all the records stored in the database.

### register.html

Here it can be found the fields to fill with new data of the new register. To check the inputs, **_Register_** button must be pushed.

### unsubs.html

More simple than the others, in this page is shown a field to input the reference number of the record to unsusbcribe. The button **_Unsubscribe_** runs the **_php_** code to check the input.
### connect.php

A **_php_** file with a coded function to make the connection with the database. Is used in **_include_** parameters.

### reg.php

Here is the code that checks the **_Register.html_** inputs. Case some field isn't filled, a message about it appears. Also, if the key  field **_Reference_** is filled with a number who exists, alerts that fact. Else, if is all right after the checks, adds the data to a new register in the database when the **_Register_** button is pushed.

### uns.php

As in the page above, first checks if the field is empty and force to fill it. If the number exists in the database, do the unsubscribe action, deleting the record with the reference number entered. If that number isn't in any register, alerts about that situation. If the action ends positively, it goes to the **_Query_** page to show the list of the register. If not, shows a message an a button to **_Go back_** and try it again.

