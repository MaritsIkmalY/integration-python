import sys
import json

a = sys.argv[1]
b = sys.argv[2]

def penjumlahan(a, b):
    hasil = int(a) + int(b)
    return hasil

print(json.dumps(penjumlahan(a,b)))
