
import openpyxl
import pprint

wb = openpyxl.load_workbook("Mouse.xlsx")
print( wb.sheetnames)
sheet = wb['Sheet1']
hang = 44
cot = 13


cells_tuple = sheet['A1:M44']
file = "insert_mouse.txt"
with open(file, mode='w') as f:

	string = ''
	for i in range( cot - 1):
		b = cells_tuple[ 0][ i].value
		string = string + '"' + b + '"' + ','
	string = string + '"' + cells_tuple[ 0][ cot - 1].value + '"'



	for x in range( 1, hang):
		a = 'insert into public."Mouse"('+ string +') values('
		for y in range( cot - 1):
			b = cells_tuple[ x][ y].value
			if type(b) != type("a"):
				b = (str)(b)
				a = a + b + ","
			else:
				a = a + "'" + b + "'" + ","
			
		b = cells_tuple[ x][ cot - 1].value
		if type(b) != type("a"):
			b = (str)(b)
			a = a + b + ","
		else:
			a = a + "'" + b + "'" + ");\n"
		f.write(a)
		





