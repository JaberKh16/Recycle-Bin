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
#driver.get("http://localhost:8080/Recycle-Bin-New/HomePage/homepage.php")
driver.get("http://localhost:8080/Recycle-Bin-Final-Updated/HomePage/homepage.php")


def type_and_test(driver):
	# locating the search box element via 'q'
	# search_box = driver.find_element_by_class_name('form-control')
	search_box = driver.find_element_by_xpath('/html/body/div[2]/div/div[1]/input')

	# to type something
	typing_criteria = 'car'

	# send_keys() is used to type in the searh box
	# element.send_keys(typing_criteria) # send_keys(input); input should be string type 

	# to click "ENTER"
	search_box.send_keys(typing_criteria)# keys.RETURN is basically the "ENTER"
	time.sleep(1)

	# locating the submit button
	# click_search = driver.find_element_by_class_name('link-btn')
	click_search = driver.find_element_by_xpath('/html/body/div[2]/div/div[1]/div/button/a')
	# click the search button
	click_search.click()
	time.sleep(1)

# calling the function
type_and_test(driver)
