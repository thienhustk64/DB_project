# INSERT INTO public."Import"(
# 	"ID_CSM", "Day", "Quantity")
# 	VALUES (?, ?, ?);

# INSERT INTO public."Import_detail"(
# 	"ID_CSM", "ID_Product", "Quantity")
# 	VALUES (?, ?, ?);

# random.randint(1, 10)

import random
from datetime import date, timedelta

import_ = 5
import_detail = 20

mylist = ["L", "H", "K", "M"]
soluong = [ 40, 19, 36, 43]

x = random.randint(0, 3)
y = random.randint( 1, soluong[x])

file = "insert_import.txt"
random_date = date(2021, 1, 1)
time_between_dates = date(2021, 2, 1) - date(2021, 1, 1)

with open( file, mode = "w") as f:
	for i in range( 1):
		n = []
		start_date = random_date
		days_between_dates = time_between_dates.days
		random_number_of_days = random.randrange(days_between_dates)
		random_date = start_date + timedelta(days=random_number_of_days)
		z = str( random_date)
		for j in range( import_detail):
			m = random.randint( 5, 15)
			n.append(m)

		total = sum(n)
		insert = """INSERT INTO public."Import"("ID_CSM", "Day", "Quantity") 
					VALUES ('I""" + str(i+1) + """', '""" + str(random_date) +"""', """ + str( 0) +""");\n"""
		f.write( insert)
		for j in range( import_detail):
			x = random.randint(0, 3)
			y = random.randint( 1, soluong[x])
			insert = """INSERT INTO public."Import_detail"("ID_CSM", "ID_Product", "Quantity") 
						VALUES ('I""" + str(i+1) + """', '""" + mylist[x] + str(y) +"""', """ + str( n[j]) +""");\n"""
			f.write( insert)