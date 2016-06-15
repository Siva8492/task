f=open("truseq.bed","r").readlines()
g=open("mutect_immediate.vcf","r").readlines()
with open("Accepted.xls","w") as out:
	print>>out,"CHROM\tPOS\tID\tREF\tALT\tQUAL\tFILTER\tINFO\tFORMAT\tnone\tLung Cancer"
	for i in f:
		if i[0]!="#":
			i=i.rstrip()
			i=i.split("\t")
			#print i
			cs=[0]
			start=int(i[1])
			end=int(i[2])
			for j in g:
				if j[0]!="#":
					j=j.rstrip()
					j=j.split("\t")
					cs1=j[0]
					poscheck=int(j[1])
					if j[0]==i[0]:
						if poscheck>=start and poscheck<=end:
							#print j
							print>>out,"{}\t{}\t{}\t{}\t{}\t{}\t{}\t{}\t{}\t{}\t{}".format(j[0],j[1],j[2],j[3],j[4],j[5],j[6],j[7],j[8],j[9],j[10])
		
	
	
