# INSERT INTO public."Import"(
# 	"ID_CSM", "Day", "Quantity")
# 	VALUES (?, ?, ?);

# INSERT INTO public."Import_detail"(
# 	"ID_CSM", "ID_Product", "Quantity")
# 	VALUES (?, ?, ?);

# random.randint(1, 10)

import random
#tìm thêm đủ 40 sản phẩm

mylist = ["L", "H", "K", "M"]

print(random.choice(mylist))

# file = "insert_import.txt"


# with open( file, mode = "w") as f:
