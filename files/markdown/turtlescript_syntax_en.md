__1__. The general syntax of turtlescript is:  
```
[TYPE]@[VARIABLE NAME] = [VALUE];
```
the same could be written as:  
```
[TYPE]@[VARIABLE NAME]= [VALUE];
```

__2__. One type (in the above code [TYPE]) is:  
| ID | Type    | C++ Typ     |
|----|---------|-------------|
| 1  | INTEGER | TUR_INTEGER |
| 2  | BOOLEAN | TUR_BOOLEAN |
| 3  | STRING  | TUR_STRING  |
| 4  | BIGNUM  | TUR_BIGNUM  |
| 5  | BYTE    | TUR_BYTE    |
| 6  | FLOAT   | TUR_FLOAT   |

__3__. _INTEGER_
An integer is stored as TUR_INTEGER (int).  
It has a value range of -2147483648 to 2147483647.  
The minus sign is written directly in front of the number.  

__4__. _BOOLEAN_
A Boolean is stored as TUR_BOOLEAN (int).  
It can either take the value true(true) or false(false).  

__5__. _STRING_
A string is saved as TUR_STRING (string).  
The text of the string is written in quotation marks..  
You can use the double quotation mark (").  

__6__. _BIGNUM_
A Bignum is saved as TUR_BIGNUM (long long).  
It has a range of values from -(263) to(263)-1.  
The minus sign is written directly in front of the number.  

__7__. _BYTE_
One byte is stored as TUR_BYTE (unsigned char).  
It has a range of values from 0 to 255.  
It should be avoided to store higher values than 255 in one byte.  
The range of values of a byte is so large that the ASCII alphabet (also ASCII code) can be tuned.  

__8__. _FLOAT_ A float is saved as TUR_FLOAT (string).  
In this case, the float is stored as a string until the evaluation or read-out of the data.  
Only when it is read, it is converted into a float.  

__9__.(C++) To compile the files with a C ++ compiler you need the C++ Boost Library.  

__10__.(C++) In C ++, there will be a namespace turtlescript successfully including the header file and successfully compiling the turtlescript files.  
In this namespace are the functions editvar, eval, context, stack, getinteger, getboolean, getstring, getbignum, getbyte, getfloat and clear.  

__11__.(C++) _editvar_
Not intended for the user / developer.  

__12__.(C++) _eval_
Interpret turtlescript code.
As the first argument, request the turtlescript code, which should be interpreted.  
Always returns one.  

__13__.(C++) _context_
Only partially intended for the user / developer.  
Interpret turtlescript code value.  
As the first argument, demand the value that should be interpreted.  
Returns the evaluated value.  
Value refers to the assignment of the code after the assignment (=).  

__14__.(C++) _stack_
Returns the currently used stack as TUR_STACK.  

__15__.(C++) _getinteger_
Converts a variable to type TUR_INTEGER.  
The first argument is the variable name of the variable from which the content is to be converted.  

__16__.(C++) _getboolean_
Converts a variable to type TUR_BOOLEAN.  
The first argument is the variable name of the variable from which the content is to be converted.  

__17__.(C++) _getstring_
Converts a variable to type TUR_STRING.  
The first argument is the variable name of the variable from which the content is to be converted.  

__18__.(C++) _getbignum_
Converts a variable to type TUR_BIGNUM.  
The first argument is the variable name of the variable from which the content is to be converted.  

__19__.(C++) _getbyte_
Converts a variable to type TUR_BYTE.  
The first argument is the variable name of the variable from which the content is to be converted.  

__20__.(C++) _getfloat_
Converts a variable to type TUR_FLOAT.  
The first argument is the variable name of the variable from which the content is to be converted.  

__21__.(C++) _clear_
Empty the variable stack.  
Always returns one.  

__22__. _Stack_
Variables in turtlescript are stored in a stack of type TUR_STACK.  
(C++) A TUR_STACK is a struct containing three vectors.  
In the first vector, named name and the storage type string, the names of the variables are stored.  
In the second vector, with the name value and the memory type any (from Boost), the contents of the variables are stored.  
In the third vector, with the type and the memory type int, the types (see point 2) of the variables are stored.  

__23__.(C++) _TUR_EXCEPTION_  
The TUR_EXCEPTION class in an Exception class (not derived from the exception (std) class) that is thrown when an interpretation error occurs.  
It contains the function what which requests nothing as an argument and returns the error message.  
It contains the function line which requests nothing as argument and returns line number in which error has happened.  

__24__. To assign the value of one variable to another, the dollar sign ($) is used.  
Behind the dollar sign ($) you write the variable name, from which the content should be displayed.  
Arithmetic operations, such as +, -, *, / or similar, are not possible.  
The chaining of strings is also not possible.  

__25__. A turtlescript file has the file extension .tur or .turtle and is usually stored with the UTF-8 encoding.  
