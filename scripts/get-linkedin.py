import requests
from bs4 import BeautifulSoup
import simplejson as json

url = 'https://www.linkedin.com/in/sakeeb-hossain/'

# get html of of webpage, parse with bs4
res = requests.get(url)
res.raise_for_status()
html_doc = res.text
soup = BeautifulSoup(html_doc, 'html.parser')

job_list = soup.find_all('ul', class_="pv-profile-section__section-info section-info pv-profile-section__section-info--has-more ember-view")
res = {}

for job in job_list:
    title = job.find('h3', class_ = "Sans-17px-black-85%-semibold").value
    description = job.find('p', class_= "pv-entity__description").value
    desc_string = ""
    for line in description:
        desc_string = desc_string + line[:1]
    res[title] = desc_string

json.dumps(res, ensure_ascii=False)
print(res)

        