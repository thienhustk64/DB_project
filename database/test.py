from datetime import date, timedelta
import random
start_date = date(2020, 1, 1)
end_date = date(2020, 2, 1)

time_between_dates = end_date - start_date
days_between_dates = time_between_dates.days
random_number_of_days = random.randrange(days_between_dates)
random_date = start_date + timedelta(days=random_number_of_days)

print( str(random_date))