# importing the selenium webdriver
from selenium import webdriver
# importing Chrome Driver Manager
from webdriver_manager.chrome import ChromeDriverManager
# importing the Keys
from selenium.webdriver.common.keys import Keys
import time

# creating an instance of Chrome Driver
driver = webdriver.Chrome(ChromeDriverManager().install()) # ChromeDriverManager().install will install the Chrome if not installed already

# locate the sign-in file
driver.get("http://localhost:8080/Recycle-Bin-Final-Updated/Sign-In-And-Sign-Up/Sign-In-Page/sign_in.php")
print("Opening the browser....")

print("Typing the Right Email and Password........")

# When the Input Value is Right
def right_email_and_pass(driver):

	# to access the element , locating the search box element via 'q'
	input_email = driver.find_element_by_id('email') 

	# to type something
	typing_criteria = 'mkhan161188@bscse.uiu.ac.bd'

	# send_keys() is used to type in the searh box
	# element.send_keys(typing_criteria) # send_keys(input); input should be string type 

	# to click "ENTER"
	input_email.send_keys(typing_criteria)# keys.RETURN is basically the "ENTER"
	print("Typing the right email...")
	time.sleep(1)

	# to access the element , locating the search box element via 'q'
	input_pass = driver.find_element_by_id('password') 

	# to type something
	typing_criteria = '1234'                                 
	# send_keys() is used to type in the searh box             
	# element.send_keys(typing_criteria) # send_keys(input); input should be string type 

	# to click "ENTER"
	input_pass.send_keys(typing_criteria) # keys.RETURN is basically the "ENTER"
	print("Typing the right password...")
	time.sleep(1)

	# locating the submit button
	click_submit = driver.find_element_by_class_name('login__button')
	print("Click the Submit Button........")
	# click the submit button
	click_submit.click()
	
	
	print("Successfully logged in......")
	time.sleep(3)
# calling the function with right input value	
print("Calling the Function for Right Email and Right Password")
right_email_and_pass(driver)

# click on the logout and perform login again this time with wrong information
logout_click = driver.find_element_by_id('logout')
logout_click.click()

# locate the sign-in file
driver.get("http://localhost:8080/Recycle-Bin-New/Sign-In-And-Sign-Up/Sign-In-Page/sign_in.php")


print("Typing the Wrong Email and Wrong Password........")

# When the Input Value is Wrong
def wrong_email_and_pass(driver):

	# to access the element , locating the search box element via 'q'
	input_email = driver.find_element_by_id('email') 

	# to type something
	typing_criteria = 'mkhan161188@bscse.uiu.ac.bd'

	# send_keys() is used to type in the searh box
	# element.send_keys(typing_criteria) # send_keys(input); input should be string type 

	# to click "ENTER"
	input_email.send_keys(typing_criteria)# keys.RETURN is basically the "ENTER"
	print("Typing the right email...")
	time.sleep(1)

	# to access the element , locating the search box element via 'q'
	input_pass = driver.find_element_by_id('password') 

	# to type something
	typing_criteria = '1234sf'                                 
	# send_keys() is used to type in the searh box             
	# element.send_keys(typing_criteria) # send_keys(input); input should be string type 

	# to click "ENTER"
	input_pass.send_keys(typing_criteria) # keys.RETURN is basically the "ENTER"
	print("Typing the right password...")
	time.sleep(1)

	# locating the submit button
	click_submit = driver.find_element_by_class_name('login__button')
	print("Click the Submit Button........")
	# click the submit button
	click_submit.click()

# calling the function with right input value	
print("Calling the Function for Wtong Email and Wrong Password")
wrong_email_and_pass(driver)
driver.refresh() # close the driver

