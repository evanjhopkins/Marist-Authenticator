import re
import mechanize
import sys

def main():
	br = mechanize.Browser()
	br.open("https://foxmail.marist.edu/imp/login.php")
	br.select_form(name="imp_login")
	br['imapuser'] = sys.argv[1]
	br['pass'] = sys.argv[2]
	response = br.submit()
	url = response.geturl()
	url = url[:36]
	url = url[-5:]
	if url == "login":
		print 0
	else:
		print 1


if __name__ == "__main__":
    main()
