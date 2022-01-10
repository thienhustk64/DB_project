import random
from datetime import date, timedelta

order_ = 5
order_detail = 5

mylist = ["L", "H", "K", "M"]
soluong = [ 40, 19, 36, 43]

x = random.randint(0, 3)
y = random.randint( 1, soluong[x])

file = "insert_order.txt"
random_date = date(2021, 6, 1)
time_between_dates = date(2021, 7, 1) - date(2021, 6, 1)

with open( file, mode = "w") as f:
	for i in range( 5):
		n = []
		start_date = random_date
		days_between_dates = time_between_dates.days
		random_number_of_days = random.randrange(days_between_dates)
		random_date = start_date + timedelta(days=random_number_of_days)
		z = str( random_date)
		for j in range( order_detail):
			m = random.randint( 1, 5)
			n.append(m)

		total = sum(n)
		insert = """INSERT INTO public."Order"("ID_Order", "Day", "Quantity", "Status") 
					VALUES ('O""" + str(i+1) + """', '""" + str(random_date) +"""', """ + str( 0) +""", 'Wait');\n"""
		f.write( insert)
		for j in range( order_detail):
			x = random.randint(0, 3)
			y = random.randint( 1, soluong[x])
			insert = """INSERT INTO public."Order_detail"("ID_Order", "ID_Product", "Quantity", "Status") 
						VALUES ('O""" + str(i+1) + """', '""" + mylist[x] + str(y) +"""', """ + str( n[j]) +""",'Wait');\n"""
			f.write( insert)