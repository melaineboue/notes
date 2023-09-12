<h2 style="color:blue">Gestion de souscriptions d'evenements</h2>
<p>
  <strong>Souscriptions</strong>
</p>

<pre>

<strong>// Définition de l'observable</strong>
currentContract: Contract
private selectedContractSubject = new Subject<Contract>();
selectedContract$: Observable<Contract> = this.selectedContractSubject.asObservable();

// Emission par l'observable
updateContract(contract: Contract): void {
    this.currentContract = contract;
    this.refresh();
}


refresh(): void {
	this.selectedContractSubject.next(this.currentContract);
}

<strong>// La souscription de l'observeur et le traitement dès la reception d'un message envoyé par l'observable</strong>
this.contractService.selectedContract$
      .pipe(takeUntil(this.destroyed$))
      .subscribe((contract: Contract) => this.onChangeContract(contract)));
</pre>


