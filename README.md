6. MasterVsFighters - https://docs.google.com/document/d/1RDG09nJkknPWs0Bq-3SFHy5z1LNvTwScpAvIRGAymAg/edit?usp=sharing

A local fight club has hired you to provide statistics for their fight championships.
The Championships always follow the same rules:
A Master will fight against some other fighters with different characteristics.
The Master always lets the fighter attack first.
The Master attacks right after the fighter (if the Master still has some health points).
The fighters come to battle one by one, from the first to the last.
It's a 1 vs 1 fight, and if the first fighter loses, then the next one comes in, until the Master either loses or beats all the fighters.
The Master is declared winner when all fighters have no health remaining.
The Fighters are declared winners when the Masters health is grounded to zero.
The Master and the Fighters have 3 attributes, they are:
Health (from 1 to 20)
Attack (from 6 to 10)
Resistance (from 1 to 5)
During the fight, each attack deals damage equal to the attacker's attack stat minus the defender's resistance stat. Note: since the attack stat is always greater than any resistance stat, there won't be a situation where the attack will deal zero or a negative amount of damage.
There are 3 types of fighters: Apprentice, Brute and Guardian.
Your task is to return the following information in the form of an array of strings:
[0] = winner: string("Master" or "Fighters")
[1] = fightersDefeated: string(amount of fighters that lost the fight)
[2] = fightersRemain: string(amount of fighters that remains if master is defeated)
[3] = masterHealth: string(amount of master's health at the end; can't be below 0)
[4] = hitsByFighters: string(amount of times that fighters hit the master)
[5] = hitsByMaster: string(amount of times the master hit the fighters)
[6] = avgDamageDealtByFighters: string(average damage per hit dealt by fighters to master, rounded to 2 decimal places)
[7] = avgDamageDealtByMaster: string(average damage per hit dealt by master to fighters, rounded to 2 decimal places)
Each type of fighter has a pre-defined set of attributes:
Fighters = {
    apprentice: {
        health: 5,
        attack: 6,
        resistance: 2                   
    },
    brute: {
        health: 6,
        attack: 8,
        resistance: 2
    },
    guardian: {
        health: 8,
        attack: 6,
        resistance: 5
    }
}

Given the list of fighters and the master's stats, your task is to return the statistical information described above.
Example
For fighters = ["a","a","b"] and master =[14, 6, 4] the result should be masterVsFighters(fighters, master) = ["Fighters", "2", "1", "0", "6", "5", "2.67", "4.00"].

 The fight consists of 2 Apprentices and a Brute against a Master with health = 14, attack = 6 and resistance = 4.

 The Fighters attacks first, so the apprentice does his first hit. The Master is able to win the first battle against the apprentice and the second against the other apprentice, but when fights against the brute, his life is just 6 (because of previous battles), so the brute attacks with 8, the Master resists only 4, so the health now is 2. The master attacks, but the brute still stands (with 2 HP) and attacks again, the Master's health is now under 0, so he lost.


The winner is the "Fighters"
2 fighters were defeated
1 fighter remains
The master has 0 health points
The fighters landed 6 hits (2 hits for each fighter)
The master landed 5 hits before being defeated (2 hits to each apprentice, and 1 hit to the brute)
Since there were 4 apprentice hits (dealing damage of 6 - 4 = 2 each time) and 2 brute hits (dealing damage of 8 - 4 = 4 each time), the average is (2 + 2 + 2 + 2 + 4 + 4) / 6 = 2.67
Both apprentices and the brute have a resistance of 2, so all hits by the master dealt 6 - 2 = 4 damage, so the average damage is 4.00
Input / Output
[execution time limit] 4 seconds (js)


[input] array.string fighters

 An array of strings representing the list of fighters that the master must face (in order).


"a" represents an Apprentice
"b" represents a Brute
"g" represents a Guardian
Guaranteed constraints:
 1 ≤ fighters.length ≤ 100
 fighters[i] ∈ {"a", "b", "g"}


[input] array.integer master

 An array of integers representing the Master's attributes, in the form [health, attack, resistance].

 Guaranteed constraints:
 1 ≤ health ≤ 20
 6 ≤ attack ≤ 10
 1 ≤ resistance ≤ 5


[output] array.string


An array of statistics about the fight.
Tests

Test No
Input
Output
1
fighters:
["a", 
 "a", 
 "b"]
master: [14, 6, 4]


["Fighters", 
 "2", 
 "1", 
 "0", 
 "6", 
 "5", 
 "2.67", 
 "4.00"]
2
fighters:
["g", 
 "g", 
 "g"]
master: [18, 6, 5]


["Fighters", 
 "2", 
 "1", 
 "0", 
 "18", 
 "17", 
 "1.00", 
 "1.00"]
3
fighters:
["g", 
 "b", 
 "a"]
master: [20, 10, 2]


["Master", 
 "3", 
 "0", 
 "2", 
 "4", 
 "4", 
 "4.50", 
 "6.50"]
4
fighters:
["a", 
 "a", 
 "a"]
master: [4, 7, 5]


["Master", 
 "3", 
 "0", 
 "1", 
 "3", 
 "3", 
 "1.00", 
 "5.00"]
5
fighters:
["g", 
 "b", 
 "g", 
 "b"]
master: [20, 10, 5]


["Master", 
 "4", 
 "0", 
 "10", 
 "6", 
 "6", 
 "1.67", 
 "6.00"]
6
fighters: ["a"]
master: [5, 7, 2]


["Master", 
 "1", 
 "0", 
 "1", 
 "1", 
 "1", 
 "4.00", 
 "5.00"]
7
fighters:
["a", 
 "a", 
 "a", 
 "b", 
 "g"]
master: [7, 10, 5]


["Fighters", 
 "4", 
 "1", 
 "0", 
 "5", 
 "4", 
 "1.40", 
 "8.00"]
8
fighters: ["g"]
master: [20, 8, 1]


["Master", 
 "1", 
 "0", 
 "5", 
 "3", 
 "3", 
 "5.00", 
 "3.00"]
9
fighters: ["b"]
master: [7, 6, 1]


["Fighters", 
 "0", 
 "1", 
 "0", 
 "1", 
 "0", 
 "7.00", 
 "0.00"]
