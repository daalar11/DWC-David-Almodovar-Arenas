class Cotxo {
    constructor(matricula,model,color,preu){
        this.matricula=matricula;
        this.model=model;
        this.color=color;
        this.preu=preu;
        this.divisa="€";
    }
    info(){
        return this.matricula+","+this.model+","+this.color+","+this.preu+this.divisa+".";
    }
    convert2Dolars(){
        if(this.divisa=="€"){
        this.preu*=1.16;
        this.divisa="$";
        }
    }
    convert2Eur(){
        if(this.divisa=="$"){
        this.preu/=1.16;
        this.divisa="€";
        }
    }
}   