<?php
	include "./data/header";
?>
<div>
	<div id="p1">
		<b>1.</b>
		The general syntax of turtlescript is:<br>
		<code>[TYPE]@[VARIABLE NAME] = [VALUE];</code><br>
		the same could be written as:<br>
		<code>[TYPE]@[VARIABLE NAME]= [VALUE];</code><br>
		A data record consists of the general syntax and thus of a variable type (see <a href="#p2">point 2</a>), a variable name, and a variable value.
	</div>
	<div id="p2">
		<b>2.</b>
		One type (in the above code [TYPE]) is:<br>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>TYPE</th>
					<th>C++ Typ</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>INTEGER</td>
					<td>TUR_INTEGER</td>
				</tr>
				<tr>
					<td>2</td>
					<td>BOOLEAN</td>
					<td>TUR_BOOLEAN</td>
				</tr>
				<tr>
					<td>3</td>
					<td>STRING</td>
					<td>TUR_STRING</td>
				</tr>
				<tr>
					<td>4</td>
					<td>BIGNUM</td>
					<td>TUR_BIGNUM</td>
				</tr>
				<tr>
					<td>5</td>
					<td>BYTE</td>
					<td>TUR_BYTE</td>
				</tr>
				<tr>
					<td>6</td>
					<td>FLOAT</td>
					<td>TUR_FLOAT</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="p3">
		<b>3.</b> <em>INTEGER</em><br>
		An integer is stored as TUR_INTEGER (int).<br>
		It has a value range of -2147483648 to 2147483647.<br>
		The minus sign is written directly in front of the number.
	</div>
	<div id="p4">
		<b>4.</b> <em>BOOLEAN</em><br>
		A Boolean is stored as TUR_BOOLEAN (int).<br>
		It can either take the value <code>true</code>(true) or <code>false</code>(false).
	</div>
	<div id="p5">
		<b>5.</b> <em>STRING</em><br>
		A string is saved as TUR_STRING (string).<br>
		The text of the string is written in quotation marks..<br>
		You can use the double quotation mark (<code>"</code>).
	</div>
	<div id="p6">
		<b>6.</b> <em>BIGNUM</em><br>
		A Bignum is saved as TUR_BIGNUM (long long).<br>
		It has a range of values from -(2<sup>63</sup>) to(2<sup>63</sup>)-1.<br>
		The minus sign is written directly in front of the number.
	</div>
	<div id="p7">
		<b>7.</b> <em>BYTE</em><br>
		One byte is stored as TUR_BYTE (unsigned char).<br>
		It has a range of values from 0 to 255.<br>
		It should be avoided to store higher values than 255 in one byte.<br>
		The range of values of a byte is so large that the ASCII alphabet (also ASCII code) can be tuned.
	</div>
	<div id="p8">
		<b>8.</b> <em>FLOAT</em>
		A float is saved as TUR_FLOAT (string).<br>
		In this case, the float is stored as a string until the evaluation or read-out of the data.<br>
		Only when it is read, it is converted into a float.<br>
	</div>
	<div id="p9">
		<b>9.</b>(C++)
		To compile the files with a C ++ compiler you need the <a href="http://www.boost.org/" target="_blank">C++ Boost Library</a>.
	</div>
	<div id="p10">
		<b>10.</b>(C++)
		In C ++, there will be a namespace turtlescript successfully including the header file and successfully compiling the turtlescript files.<br>
		In this namespace are the functions editvar, eval, context, stack, getinteger, getboolean, getstring, getbignum, getbyte, getfloat and clear.
	</div>
	<div id="p11">
		<b>11.</b>(C++) <em>editvar</em><br>
		Not intended for the user / developer.
	</div>
	<div id="p12">
		<b>12.</b>(C++) <em>eval</em><br>
		Interpret turtlescript code.<br>
		As the first argument, request the turtlescript code, which should be interpreted.<br>
		Always returns one.
	</div>
	<div id="p13">
		<b>13.</b>(C++) <em>context</em><br>
		Only partially intended for the user / developer.<br>
		Interpret turtlescript code value.<br>
		As the first argument, demand the value that should be interpreted.<br>
		Returns the evaluated value.<br>
		Value refers to the assignment of the code after the assignment (<code>=</code>).
	</div>
	<div id="p14">
		<b>14.</b>(C++) <em>stack</em><br>
		Returns the currently used stack as TUR_STACK.
	</div>
	<div id="p15">
		<b>15.</b>(C++) <em>getinteger</em><br>
		Converts a variable to type TUR_INTEGER.<br>
		The first argument is the variable name of the variable from which the content is to be converted.
	</div>
	<div id="p16">
		<b>16.</b>(C++) <em>getboolean</em><br>
		Converts a variable to type TUR_BOOLEAN.<br>
		The first argument is the variable name of the variable from which the content is to be converted.
	</div>
	<div id="p17">
		<b>17.</b>(C++) <em>getstring</em><br>
		Converts a variable to type TUR_STRING.<br>
		The first argument is the variable name of the variable from which the content is to be converted.
	</div>
	<div id="p18">
		<b>18.</b>(C++) <em>getbignum</em><br>
		Converts a variable to type TUR_BIGNUM.<br>
		The first argument is the variable name of the variable from which the content is to be converted.
	</div>
	<div id="p19">
		<b>19.</b>(C++) <em>getbyte</em><br>
		Converts a variable to type TUR_BYTE.<br>
		The first argument is the variable name of the variable from which the content is to be converted.
	</div>
	<div id="p20">
		<b>20.</b>(C++) <em>getfloat</em><br>
		Converts a variable to type TUR_FLOAT.<br>
		The first argument is the variable name of the variable from which the content is to be converted.
	</div>
	<div id="p21">
		<b>21.</b>(C++) <em>clear</em><br>
		Empty the variable stack.<br>
		Always returns one.
	</div>
	<div id="p22">
		<b>22.</b> <em>Stack</em><br>
		Variables in turtlescript are stored in a stack of type TUR_STACK.<br>
		(C++) A TUR_STACK is a struct containing three vectors.<br>
		In the first vector, named name and the storage type string, the names of the variables are stored.<br>
		In the second vector, with the name value and the memory type any (from Boost), the contents of the variables are stored.<br>
		In the third vector, with the type and the memory type int, the types (see <a href="#p2">point 2</a>) of the variables are stored.<br>
	</div>
	<div id="p23">
		<b>23.</b>(C++) <em>TUR_EXCEPTION</em><br>
		The TUR_EXCEPTION class in an Exception class (not derived from the exception (std) class) that is thrown when an interpretation error occurs.<br>
		It contains the function what which requests nothing as an argument and returns the error message.<br>
		It contains the function line which requests nothing as argument and returns line number in which error has happened.
	</div>
	<div id="p24">
		<b>24.</b>
		To assign the value of one variable to another, the dollar sign (<code>$</code>) is used.<br>
		Behind the dollar sign (<code>$</code>) you write the variable name, from which the content should be displayed.<br>
		Arithmetic operations, such as +, -, *, / or similar, are not possible.<br>
		The chaining of strings is also not possible.
	</div>
	<div id="p25">
		<b>25.</b>
		A turtlescript file has the file extension .tur or .turtle and is usually stored with the UTF-8 encoding.
	</div>
	<div id="p26">
		<b>26.</b>
		There may be any number of records below or next to each other.
	</div>
	<div id="p27">
		<b>27.</b>
		Comments are introduced with a double plus sign (<code>#</code>) and ended with a symicolon (<code>;</code>).<br>
		Comments may also go over several lines.
	</div>
</div>
<p>Download(Outdated): <a href="/files/pdf/turtlescript_syntax_en.pdf">PDF</a>; <a href="/files/markdown/turtlescript_syntax_en.md">Markdown</a></p>
<?php
	include "./data/footer";
?>