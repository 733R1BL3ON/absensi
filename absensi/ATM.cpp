#include <stdio.h>
#include <conio.h>
#include <string.h>
#include <stdlib.h>


int main(){
	char cc[17],nocc[17];
	char CC1[17]="4003447442533909",CC2[17]="4425189424158152",CC3[17]="5289197623308496",CC4[17]="4137183825116108",CC5[17]="4472114608767430",CC6[17]="4147206014371735";
	int bahasa=0,salah,saldo,Credit,tariktunai,transfer,deposit,pilihan,hitung;
	depan:
	printf("\t===============================================\n");
	printf("\t-----------Money Is Root Of All Evil-----------\n");
	printf("\t===============================================\n");
	printf("\t|\tPilih Bahasa/Choose Language\t      |\n");
	printf("\t|\t\t1.BAHASA INDONESIA\t      |\n");
	printf("\t|\t     2.INGGRIS(COOMING SOON)\t      |\n");
	printf("\t===============================================\n");
	printf("\tPILIH :");
	scanf("%d",&bahasa);
	if(bahasa==1){
	 printf("\tAnda Memilih Bahasa Indonesia\n");
	 getch();
	 system("cls");
	 goto indonesia;
	}else{
		goto depan;
	}
	indonesia:
	printf("\t===============================================\n");
	printf("\t-----------Money Is Root Of All Evil-----------\n");
	printf("\t===============================================\n");
	printf("\t|   Silahkan Masukan Nomor Kartu ATM Anda     |\n");
	printf("\t|   Nomor Kustomer Service Kami Hanya 14045   |\n");
	printf("\t===============================================\n");
	printf("\tMasukan Nomor Credit Card Mu :");
		scanf("%s",&cc);
	if(strcmp(cc,CC1)==0){
		saldo=500000000;
		Credit=1;
		pin:
		char pin[4]="034";
		char PIN[4];
		printf("\tMasukan PIN :");
		scanf("%s",&PIN);
		if(strcmp(pin,PIN)==0){
			goto CC1;
		}else if(strcmp(pin,PIN)>0){
			printf("\tSilahkan masukkan pin yang benar !\n");
            salah+=1;
            if (salah==3) {
                printf ("\tAnda Salah Memasukan Pin 3X Anda TERCYDUCK!!!!11!1!!111!!!\n\n"); goto depan;
			}else{
				goto pin;
			}
		
		}
	}else if(strcmp(cc,CC2)==0){
		saldo=200000000;
		char pin[4]="576";
		char PIN[4];
		pin2:
		printf("\tMasukan PIN :");
		scanf("%s",&PIN);
		if(strcmp(pin,PIN)==0){
			goto CC2;
		}else{
			printf("\tSilahkan masukkan pin yang benar !\n");
            salah+=1;
            if (salah==3) {
                printf ("\tATM Diblokir Karena Anda 3x Salah Memasukkan PIN\n\n"); goto depan;
			}else{
				goto pin2;
			}
		}
	}else{
		printf("Nomor Tidak Ditemukan");
		getch();
		system("cls");
		goto indonesia;	
	}
	
	
	
	CC1:
	printf("\n\t===============================================\n");
	printf("\t-----------Money Is Root Of All Evil-----------\n");
	printf("\t===============================================\n");
	printf("\t|NAMA       : PAK R.A.T DEN\t\t      |\n");
	printf("\t|ALAMAT     : JALAN DOANG JADIAN KAGAK\t      |\n");
	printf("\t|NEGARA     : AMERIKA\t\t              |\n");
	printf("\t|ISSUE BANK : CapitalOne Platinum\t      |\n");
	printf("\t|TIPE KARTU : CREDIT\t\t              |\n");
	printf("\t|LEVEL KARTU: PLATINUM\t\t              |\n");
	printf("\t|SALDO      : %d\t\t              |\n",saldo);
	printf("\t===============================================\n");
	printf("\t------- If Money Not Rest We Cant Sleep -------\n");
	printf("\t===============================================\n");
	printf("\t|\t\t    MENU\t\t      |\n");
	printf("\t===============================================\n");
	printf("\t|\t\t1.TARIK TUNAI\t\t      |\n");
	printf("\t|\t\t2.TRANSFER\t\t      |\n");
	printf("\t|\t\t3.DEPOSIT\t\t      |\n");
	printf("\t|\t\t4.KEMBALI KE AWAL\t      |\n");
	printf("\t===============================================\n");
	printf("\tSilahkan Masukan Pilihan :");
	scanf("%d",&pilihan);
	system("cls");
	if(pilihan==1){
	printf("\t===============================================\n");
	printf("\t-----------Money Is Root Of All Evil-----------\n");
	printf("\t===============================================\n");
	printf("\tMasukan Nominal Yang Akan Diambil           : "	);
	scanf("%d",&tariktunai);
	if(saldo<tariktunai){
			printf("\tSaldo Tidak Cukup\n");
				goto CC1;
	}else{
	saldo=saldo-tariktunai;
	printf("\tAnda Berhasil Melakukan Tarik Tunai Sebesar : %d ",tariktunai,"\n");
	printf("\n\t===============================================\n");
	printf("\t------- If Money Not Rest We Cant Sleep -------\n");
	printf("\t===============================================\n");
	goto CC1;
	}
	}else if(pilihan==2){
	printf("\n\t===============================================\n");
	printf("\t-----------Money Is Root Of All Evil-----------\n");
	printf("\t===============================================\n");
	printf("\tMasukan Nomor ATM Yang Akan Ditransfer    : ");
	scanf("%s",&nocc);
	printf("\tMasukan Nominal Yang Akan Ditransfer      : ");
	scanf("%d",&transfer);
		if(saldo<transfer){
			printf("\tSaldo Tidak Cukup\n");
				goto CC1;
	}else{
	saldo=saldo-transfer;
	printf("\tAnda Melakukan Transfer Ke Nomor          : %s ",nocc);
	printf("\n\tAnda Berhasil Melakukan Transfer  Sebesar : %d ",transfer);
	printf("\n\t===============================================\n");
	printf("\t------- If Money Not Rest We Cant Sleep -------\n");
	printf("\t===============================================\n");
	goto CC1;
	}
	}else if(pilihan==3){
	printf("\tMasukan Nominal Yang Akan Dimasukan         : ");
	scanf("%d",&deposit);	
	if(saldo<deposit){
			printf("\tSaldo Tidak Cukup\n");
				goto CC1;
	}else{
	saldo=saldo+deposit;
	printf("\tAnda Berhasil Melakukan Deposit Sebesar : %d ",deposit,"\n");
	printf("\t\n===============================================\n");
	printf("\t------- If Money Not Rest We Cant Sleep -------\n");
	printf("\t===============================================\n");
	goto CC1;}
	}else if(pilihan==4){
		goto depan;
	}else{
		printf("Pilihan Tidak Ditemukan");
	goto CC1;
	}
	
	CC2:
		printf("\t===============================================\n");
	printf("\t-----------Money Is Root Of All Evil-----------\n");
	printf("\t===============================================\n");
	printf("\t|NAMA       : UDEEEEEEEN\t\t      |\n");
	printf("\t|ALAMAT     : JALAN KENANGAN MANTAN\t      |\n");
	printf("\t|NEGARA     : AMERIKA\t\t              |\n");
	printf("\t|ISSUE BANK : WELLS FARGO BANK\t              |\n");
	printf("\t|TIPE KARTU : CREDIT\t\t              |\n");
	printf("\t|LEVEL KARTU: PLATINUM\t\t              |\n");
	printf("\t|SALDO      : %d\t\t              |\n",saldo);
	printf("\t===============================================\n");
	printf("\t------- If Money Not Rest We Cant Sleep -------\n");
	printf("\t===============================================\n");
	printf("\t|\t\t    MENU\t\t      |\n");
	printf("\t===============================================\n");
	printf("\t|\t\t1.TARIK TUNAI\t\t      |\n");
	printf("\t|\t\t2.TRANSFER\t\t      |\n");
	printf("\t|\t\t3.DEPOSIT\t\t      |\n");
	printf("\t|\t\t4.KEMBALI KE AWAL\t      |\n");
	printf("\t===============================================\n");
	printf("\tSilahkan Masukan Pilihan :");
	scanf("%d",&pilihan);
	system("cls");
	if(pilihan==1){
	printf("\t===============================================\n");
	printf("\t-----------Money Is Root Of All Evil-----------\n");
	printf("\t===============================================\n");
	printf("\tMasukan Nominal Yang Akan Diambil           : ");
	scanf("%d",&tariktunai);
	if(saldo<tariktunai){
			printf("\tSaldo Tidak Cukup\n");
				goto CC2;
	}else{
	saldo=saldo-tariktunai;
	printf("\tAnda Berhasil Melakukan Tarik Tunai Sebesar : %d ",tariktunai,"\n");
	printf("\n\t===============================================\n");
	printf("\t------- If Money Not Rest We Cant Sleep -------\n");
	printf("\t===============================================\n");
	goto CC2;
	}
	}else if(pilihan==2){
	printf("\n\t===============================================\n");
	printf("\t-----------Money Is Root Of All Evil-----------\n");
	printf("\t===============================================\n");
	printf("\tMasukan Nomor ATM Yang Akan Ditransfer    : ");
	scanf("%s",&nocc);
	printf("\tMasukan Nominal Yang Akan Ditransfer      : ");
	scanf("%d",&transfer);
	if(saldo<transfer){
			printf("\tSaldo Tidak Cukup\n");
				goto CC2;
	}else{
	saldo=saldo-transfer;
	printf("\tAnda Melakukan Transfer Ke Nomor          : %s ",nocc);
	printf("\n\tAnda Berhasil Melakukan Transfer  Sebesar : %d ",transfer);
	printf("\n\t===============================================\n");
	printf("\t------- If Money Not Rest We Cant Sleep -------\n");
	printf("\t===============================================\n");
	goto CC2;
	}
	
	}else if(pilihan==3){
	printf("\tMasukan Nominal Yang Akan Dimasukan         : ");
	scanf("%d",&deposit);
	if(saldo<deposit){
			printf("\tSaldo Tidak Cukup\n");
				goto CC2;
	}else{
	saldo=saldo+deposit;
	printf("\tAnda Berhasil Melakukan Deposit Sebesar : %d ",deposit,"\n");
	printf("\t\n===============================================\n");
	printf("\t------- If Money Not Rest We Cant Sleep -------\n");
	printf("\t===============================================\n");
	goto CC2;}
	}else if(pilihan==4){
		goto depan;
	}else{
		printf("Pilihan Tidak Ditemukan");
	goto CC2;
	}
	
}
