import json
import urllib2
import csv

def lookup(lat, lon):
    # data = json.load(urllib2.urlopen('http://maps.googleapis.com/maps/api/geocode/json?latlng=%s,%s&sensor=false' % (lat, lon)))

    data = json.load(urllib2.urlopen('http://api.geonames.org/countrySubdivisionJSON?lat=%s&lng=%s&lang=en&username=myh2o' % (lat, lon)))

    if 'countryCode' not in data or data['countryCode'] != 'CN':
        print "This isn't in China you idiot"
    else:
        if 'codes' not in data:
            print "No codes available"
            return None

        for code in data['codes']:
            if code['type'] == 'ISO3166-2':
                subdiv = code['code']
        return 'CN-' + str(subdiv)
 
    return None

# print lookup(31, -86.234)
# print lookup(31, 103)

f = open('greenovationISO.csv', 'w')

with open('greenovation.csv', 'rb') as csvfile:
    rows = csv.reader(csvfile, delimiter=',')
    firstline = True
    for row in rows:
        if firstline:
            f.write(', '.join(row))
            f.write('\n')
            firstline = False
            continue
            
        lat = row[1]
        lng = row[0]
        print lookup(lat,lng)
        if lookup(lat,lng) != None:
            row.append(lookup(lat,lng))
            f.write(', '.join(row))
            f.write('\n')
